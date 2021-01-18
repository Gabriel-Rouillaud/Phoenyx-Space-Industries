<?php


namespace App\Controller\Admin;


use App\Entity\Destination; // Classe de l'entité "Destination"
use App\Form\DestinationType; // Classe du formulaire abstrait "Destination"
use App\Repository\DestinationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class DestinationController extends AbstractController
{

    /**
     * @Route ("admin/destination", name="admin_destination_manager")
     * @param DestinationRepository $destinationRepository
     * @return Response
     */
    public function destinationList(DestinationRepository $destinationRepository)
    {
        $destination = $destinationRepository->findAll();

        return $this->render('back-office/destination_manager/index.html.twig', [
            'destination' => $destination
        ]);
    }

    /**
     * @Route ("admin/destination/show/{id}", name="admin_destination_show", methods={"GET", "POST"})
     * @param $id
     * @param DestinationRepository $destinationRepository
     * @return Response
     */
    public function destinationShow($id, DestinationRepository $destinationRepository)
    {
        $destination = $destinationRepository->find($id);

        return $this->render('back-office/destination_manager/destination_show.html.twig', [
            'destination' => $destination,
            'destination_id' => $id
        ]);

    }


    /**
     * @Route ("admin/destination/edit/{id}", name="admin_destination_edit", methods={"GET", "POST"})
     * @param $id
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param DestinationRepository $destinationRepository
     * @return RedirectResponse|Response
     */
    public function destinationEdit(
        $id,
        Request $request,
        EntityManagerInterface $entityManager,
        DestinationRepository $destinationRepository)
    {
        $destination = $destinationRepository->find($id);

        $form = $this->createForm(DestinationType::class, $destination);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $entityManager->persist($destination);
            $entityManager->flush();

            return $this->redirectToRoute('admin_destination_manager');
        }

        return $this->render('back-office/destination_manager/destination_edit.html.twig', [
            'destination' => $destination,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route ("admin/destination/new", name="admin_destination_new", methods={"GET", "POST"})
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param SluggerInterface $slugger
     * @return RedirectResponse|Response
     */
    public function destinationNew(
        Request $request,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger)
    {

        $destination = new Destination();

        $form = $this->createForm(DestinationType::class, $destination);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // je récupère mon fichier uploadé dans le formulaire (vu que dans le gabarit
            // de formulaire, j'ai mis ce champs à 'mapped => false"
            $imageFile = $form->get('img')->getData();

            // si j'ai bien récupéré une image (il peut y avoir des articles
            // uploadés sans image), alors je vais la déplacer puis enregistrer son nom en bdd
            if ($imageFile) {

                // je récupère le nom de l'image
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);

                // grâce à la classe Slugger, je transforme le nom de mon image
                // pour sortir tous les caractères spéciaux (espaces etc)
                $safeFilename = $slugger->slug($originalFilename);

                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();


                // je déplace l'image dans un dossier que j'ai spécifié en parametre
                // (dans le fichier config/services.yaml)
                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );

                // une fois que j'ai déplacé l'image, j'enregistre le nom de l'image
                // dans mon entité (pour qu'elle soit sauvée en bdd)
                $destination->setImg($newFilename);
            }



            $entityManager->persist($destination); //je persiste les données de la destination
            $entityManager->flush(); // Je l'envoie en base de données

            return $this->redirectToRoute('admin_destination_manager'); // Une fois l'action terminée,
            // je redirige l'utilisateur vers la page destination manager

        }

        return $this->render('back-office/destination_manager/destination_new.html.twig', [
            'destination' => $destination,
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route ("admin/destination/delete/{id}/", name="admin_destination_delete")
     * @param $id
     * @param Request $request
     * @param DestinationRepository $destinationRepository
     * @param EntityManagerInterface $entityManager
     * @return RedirectResponse
     */
    public function destinationDelete($id, Request $request, DestinationRepository $destinationRepository, EntityManagerInterface $entityManager){

        $destination = $destinationRepository->find($id);

        if (!is_null($destination)) {
            $entityManager->remove($destination);
            $entityManager->flush();
        }

       return $this->redirectToRoute('admin_destination_manager');

    }














}