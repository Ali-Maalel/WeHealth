<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WehealthController extends AbstractController
{
    #[Route('/wehealth', name: 'app_wehealth')]
    public function index(): Response
    {
        return $this->render('wehealth/index.html.twig', [
            'controller_name' => 'WehealthController',
        ]);
    }
}
