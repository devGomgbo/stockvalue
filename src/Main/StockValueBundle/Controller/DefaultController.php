<?php

namespace Main\StockValueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/societe", name="main_fichier_societe")
     * @Template()
     */
    public function societeAction()
    {
        return array('name' => "Societe");
    }

    /**
     * @Route("/fonction", name="main_fichier_fonction")
     * @Template()
     */
    public function fonctionAction()
    {
        return array('name' => "Fonction");
    }


}
