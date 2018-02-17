<?php

namespace DetailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DetailBundle:Default:index.html.twig');
    }
}
