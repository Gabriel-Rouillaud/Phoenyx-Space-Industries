<?php

namespace App\Controller;
//*J'ai crée un espace App\Controller, c'est pour reconnaitre les Controllers avec Symfony


use App\Repository\DestinationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DestinationsController extends AbstractController
{
    /**
     * @Route("/destinations", name="destinations", methods={"GET"})
     */
    public function destinationList(DestinationRepository $destinationRepository): Response
    {
        $destination = $destinationRepository->findAll();

        return $this->render('destination/destination.html.twig', [
            'destination' => $destination
        ]);
    }





}
