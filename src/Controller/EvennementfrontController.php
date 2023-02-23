<?php

namespace App\Controller;

use App\Entity\Evennement;
use App\Form\EvennementType;
use App\Repository\EvennementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/evennementfront')]
class EvennementfrontController extends AbstractController
{
    #[Route('/', name: 'app_evennementfront_index', methods: ['GET'])]
    public function index(EvennementRepository $evennementRepository): Response
    {
        return $this->render('evennementfront/index.html.twig', [
            'evennements' => $evennementRepository->findAll(),
        ]);
}

}