<?php

namespace WMCUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WMCUserBundle:Default:index.html.twig');
    }
}
