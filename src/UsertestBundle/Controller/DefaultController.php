<?php

namespace UsertestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UsertestBundle:Default:index.html.twig');
    }
}
