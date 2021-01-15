<?php


namespace App\Controller;

use App\Form\UserFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class AccountController extends AbstractController
{
    /**
     * @Route ("/account", name="page_account")
     */
    public function account (){
        return $this->render('account/account.html.twig');
    }

    /**
     * @Route("/account/profile", name="page_profile", methods={"GET", "POST"})
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function profileEdit(Request $request, EntityManagerInterface $entityManager){

        $profile = $this->getUser();

        $form = $this->createForm(UserFormType::class, $profile);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($profile);
            $entityManager->flush();

            $this->addFlash(
                "success",
                "Your profile has been modified !"
            );

            return $this->redirectToRoute('page_profile');
        }


        return  $this->render('account/profile.html.twig', [
            'form' => $form->createView()
        ]);



    }









}

