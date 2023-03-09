<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdenanceApiController extends AbstractController
{
    #[Route('/ordenance/api', name: 'app_ordenance_api')]
    public function index(): Response
    {
        return $this->render('ordenance_api/index.html.twig', [
            'controller_name' => 'OrdenanceApiController',
        ]);
    }
}
