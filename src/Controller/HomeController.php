<?php

namespace App\Controller;

//* J'ai appélé 3 class qui sont des fonctionnalités de Symfony
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //* Cette classe permet d'utiliser les {id}
use Symfony\Component\HttpFoundation\Response; //* Cette class permet de renvoyer une reponse
use Symfony\Component\Routing\Annotation\Route; //* Cette class permet de créer une route avec l'url vers la page demandée
use Symfony\Component\HttpFoundation\Request; //* Cette classe permet de gérer les requête http avec la méthode $_GET et $_POST

class HomeController extends AbstractController
//* J'ai crée une class "HomeController" avec extends AbstractController ce qui permet de gérer les {id} en plus.

{
    /**
     * @Route("/", name="page_index")
     * J'ai crée une route vers la page d'acceuil de mon site, la route se trouve à la racine avec "/" et je lui es
     * donné un nom "page_index"
     */
    public function index(): Response //*Quand je vais faire appel à la route, cette méthode vas s'executer
    {


        return $this->render('index/index.html.twig', [
            'controller_name' => 'HomeController',
            //* Cette ligne ne sert à rien, je l'ai gardée pour intégrer des variables
            //*plus tard.

        ]); //* Dès que la méthode est appelée, Il va renvoyer les résultats sur index.html.twig
    }

}
