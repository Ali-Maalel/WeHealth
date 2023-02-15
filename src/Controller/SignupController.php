<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\SignupType;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

class SignupController extends AbstractController
{
    #[Route('/signup', name: 'app_signup')]
    public function index(): Response
    {
        return $this->render('signup/index.html.twig', [
            'controller_name' => 'SignupController',
        ]);
    }
    #[Route('/signup/addUser', name: 'app_signup_addUser')]
    public function addUser(ManagerRegistry $doctrine, Request $req):Response{
        $em=$doctrine->getManager();
        $user = new User();
        $form = $this->createForm(SignupType::class,$user);
        $form->handleRequest($req);
        if($form->isSubmitted())
        {
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('');
        }
        return $this->renderForm('signup/index.html.twig', ['form'=>$form]);


    }
}
