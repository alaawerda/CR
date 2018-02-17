<?php

namespace TypepermisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TypepermisBundle:Default:index.html.twig');
    }
}
