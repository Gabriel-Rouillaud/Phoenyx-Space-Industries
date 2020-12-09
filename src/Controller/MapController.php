<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class MapController extends AbstractController
{
    /**
     * @Route ("/solarmap", name="solar-map")
     */
    public function Map(){

        return $this->render('solar-map/solarmap.html.twig');
    }
}