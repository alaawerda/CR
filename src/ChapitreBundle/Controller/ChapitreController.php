<?php

namespace ChapitreBundle\Controller;

use ChapitreBundle\Entity\Chapitre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Chapitre controller.
 *
 */
class ChapitreController extends Controller
{
    /**
     * Lists all chapitre entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $chapitres = $em->getRepository('ChapitreBundle:Chapitre')->findAll();

        return $this->render('chapitre/index.html.twig', array(
            'chapitres' => $chapitres,
        ));
    }

    /**
     * Creates a new chapitre entity.
     *
     */
    public function newAction(Request $request)
    {
        $chapitre = new Chapitre();
        $form = $this->createForm('ChapitreBundle\Form\ChapitreType', $chapitre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chapitre);
            $em->flush();

            return $this->redirectToRoute('chapitre_show', array('id' => $chapitre->getId()));
        }

        return $this->render('chapitre/new.html.twig', array(
            'chapitre' => $chapitre,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a chapitre entity.
     *
     */
    public function showAction(Chapitre $chapitre)
    {
        $deleteForm = $this->createDeleteForm($chapitre);

        return $this->render('chapitre/show.html.twig', array(
            'chapitre' => $chapitre,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing chapitre entity.
     *
     */
    public function editAction(Request $request, Chapitre $chapitre)
    {
        $deleteForm = $this->createDeleteForm($chapitre);
        $editForm = $this->createForm('ChapitreBundle\Form\ChapitreType', $chapitre);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('chapitre_edit', array('id' => $chapitre->getId()));
        }

        return $this->render('chapitre/edit.html.twig', array(
            'chapitre' => $chapitre,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a chapitre entity.
     *
     */
    public function deleteAction(Request $request, Chapitre $chapitre)
    {
        $form = $this->createDeleteForm($chapitre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($chapitre);
            $em->flush();
        }

        return $this->redirectToRoute('chapitre_index');
    }

    /**
     * Creates a form to delete a chapitre entity.
     *
     * @param Chapitre $chapitre The chapitre entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Chapitre $chapitre)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chapitre_delete', array('id' => $chapitre->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
