<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'appadmin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    #[Route('/dashboards', name: 'app_admin')]
    public function index1(): Response
    {
        return $this->render('admin/dashboards.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
