<?php

namespace Maytok\DeliveryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MaytokDeliveryBundle:Default:index.html.twig');
    }
}
