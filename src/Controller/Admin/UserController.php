<?php


namespace App\Controller\Admin;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    /**
     * @Route ("/admin/usermanager", name="admin_user_manager")
     */
    public function userList(UserRepository $userRepository)
    {
        $users = $userRepository->findAll();

        return $this->render('');
    }


    /**
     * @Route ("/admin/usermanager/add"), name="usermanager_add")
     */
    public function userAdd(UserRepository $userRepository, EntityManager $entityManager)
    {


    }

}




