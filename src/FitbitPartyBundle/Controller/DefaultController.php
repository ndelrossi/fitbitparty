<?php

namespace FitbitPartyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FitbitPartyBundle:Default:index.html.twig', array('name' => $name));
    }
}
