<?php

namespace Security\StockValueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SecurityStockValueBundle:Default:index.html.twig', array('name' => $name));
    }
}
