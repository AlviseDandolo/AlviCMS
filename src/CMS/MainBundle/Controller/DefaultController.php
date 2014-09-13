<?php

namespace CMS\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CMSMainBundle:Default:index.html.twig', array('environment' => $this->get('kernel')->getEnvironment()));
    }
}
