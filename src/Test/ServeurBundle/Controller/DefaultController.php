<?php

namespace Test\ServeurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestServeurBundle:Default:index.html.twig');
    }
}
