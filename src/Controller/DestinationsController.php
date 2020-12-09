<?php

namespace App\Controller;
//*J'ai crée un espace App\Controller, c'est pour reconnaitre les Controllers avec Symfony


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DestinationsController extends AbstractController
{
    /**
     * @Route("/destinations", name="destinations")
     */
    public function destinationList(): Response
    {
        return $this->render('destinations/index.html.twig', [
            'controller_name' => 'DestinationsController',
        ]);
    }

    /**
     * @Route ("/destination/{id}", name="destination_id")
     */
}
