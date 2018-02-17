<?php

namespace MoniteurBundle\Controller;

use MoniteurBundle\Entity\Moniteur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Moniteur controller.
 *
 */
class MoniteurController extends Controller
{
    /**
     * Lists all moniteur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $moniteurs = $em->getRepository('MoniteurBundle:Moniteur')->findAll();

        return $this->render('moniteur/index.html.twig', array(
            'moniteurs' => $moniteurs,
        ));
    }

    /**
     * Creates a new moniteur entity.
     *
     */
    public function newAction(Request $request)
    {
        $moniteur = new Moniteur();
        $form = $this->createForm('MoniteurBundle\Form\MoniteurType', $moniteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($moniteur);
            $em->flush();

            return $this->redirectToRoute('moniteur_show', array('idmoniteur' => $moniteur->getIdmoniteur()));
        }

        return $this->render('moniteur/new.html.twig', array(
            'moniteur' => $moniteur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a moniteur entity.
     *
     */
    public function showAction(Moniteur $moniteur)
    {
        $deleteForm = $this->createDeleteForm($moniteur);

        return $this->render('moniteur/show.html.twig', array(
            'moniteur' => $moniteur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing moniteur entity.
     *
     */
    public function editAction(Request $request, Moniteur $moniteur)
    {
        $deleteForm = $this->createDeleteForm($moniteur);
        $editForm = $this->createForm('MoniteurBundle\Form\MoniteurType', $moniteur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('moniteur_edit', array('idmoniteur' => $moniteur->getIdmoniteur()));
        }

        return $this->render('moniteur/edit.html.twig', array(
            'moniteur' => $moniteur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a moniteur entity.
     *
     */
    public function deleteAction(Request $request, Moniteur $moniteur)
    {
        $form = $this->createDeleteForm($moniteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($moniteur);
            $em->flush();
        }

        return $this->redirectToRoute('moniteur_index');
    }

    /**
     * Creates a form to delete a moniteur entity.
     *
     * @param Moniteur $moniteur The moniteur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Moniteur $moniteur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('moniteur_delete', array('idmoniteur' => $moniteur->getIdmoniteur())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
