<?php

namespace PPE4\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PPE4AdminBundle:Default:index.html.twig');
    }
}
