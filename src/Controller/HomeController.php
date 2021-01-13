<?php

namespace App\Controller;

//* J'ai appélé 3 class qui sont des fonctionnalités de Symfony

use App\Form\SearchIndexType;
use App\Repository\DepartureRepository;
use App\Repository\ArrivalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //* Cette classe permet d'utiliser les {id}
use Symfony\Component\HttpFoundation\Response; //* Cette class permet de renvoyer une reponse
use Symfony\Component\Routing\Annotation\Route; //* Cette class permet de créer une route avec l'url vers la page demandée
use Symfony\Component\HttpFoundation\Request; //* Cette classe permet de gérer les requête http avec la méthode $_GET et $_POST

class HomeController extends AbstractController
//* J'ai crée une class "HomeController" avec extends AbstractController ce qui permet de gérer les {id} en plus.

{
    /**
     * @Route("/", name="page_index")
     * @param Request $request
     * @param DepartureRepository $departureRepository
     * @param ArrivalRepository $arrivalRepository
     * @return Response
     */
    public function index (Request $request, DepartureRepository $departureRepository, ArrivalRepository $arrivalRepository){

        $searchForm = $this->createForm(SearchIndexType::class);
        $searchForm->handleRequest($request);


        if ($searchForm->isSubmitted() && $searchForm->isValid()) {

            $departure = $searchForm->getData()->getDeparture();
            $arrival = $searchForm->getData()->getArrival();



            $data = $departure->search($departure) && $arrival->search($arrival);


            if ($data == null) {
                $this->addFlash('erreur', 'Aucun article contenant ce mot clé dans le titre n\'a été trouvé, essayez en un autre.');

            }

            return $this->render('index/search.html.twig');



        }
        return $this->render('index/index.html.twig', [
            'searchForm'=>$searchForm->createView()
        ]);

    }

    /**
     * @Route ("/contact", name="page_contact")
     */

    public function contact(): Response
    {
        return $this->render('contact.html.twig');
    }

    /**
     * @Route ("/faq", name="page_faq")
     */

    public function faq(): Response
    {
        return $this->render('faq.html.twig');
    }

    /**
     * @Route ("/privacy", name="page_privacy")
     */

    public function privacy(): Response
    {
        return $this->render('privacy.html.twig');
    }

}
