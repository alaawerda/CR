<?php

namespace ChapitreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ChapitreBundle:Default:index.html.twig');
    }
}
