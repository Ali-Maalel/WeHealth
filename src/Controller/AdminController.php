<?php

namespace App\Controller;


use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/admin")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/user/{id}/block", name="admin_block_user")
     */
    public function blockUser(Request $request, UserRepository $userRepository, User $user): Response
    {
        $userRepository->blockUser($user);

        // Redirigez l'administrateur vers une page de confirmation.
        // Par exemple, vous pouvez rediriger l'utilisateur vers la liste des utilisateurs.
        return $this->redirectToRoute('admin_user_list');
    }

    /**
     * @Route("/users/{id}/unblock", name="admin_unblock_user")
     */
    public function unblockUser(Request $request, UserRepository $userRepository, User $user): Response
    {
        $userRepository->unblockUser($user);

        return $this->redirectToRoute('admin_user_list');
    }
    
        #[Route('/admin', name: 'app_admin')]
        public function index(): Response
        {
            return $this->render('admin/index.html.twig', [
                'controller_name' => 'AdminController',
            ]);
        }
    
}








