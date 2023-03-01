<?php

namespace App\Controller;

use App\Entity\ProfessionnelSante;
use App\Form\ProfessionnelSanteType;
use App\Repository\ProfessionnelSanteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/professionnel/sante')]
class ProfessionnelSanteController extends AbstractController
{
    #[Route('/', name: 'app_professionnel_sante_index', methods: ['GET'])]
    public function index(ProfessionnelSanteRepository $professionnelSanteRepository): Response
    {
        return $this->render('professionnel_sante/index.html.twig', [
            'professionnel_santes' => $professionnelSanteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_professionnel_sante_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ProfessionnelSanteRepository $professionnelSanteRepository): Response
    {
        $professionnelSante = new ProfessionnelSante();
        $form = $this->createForm(ProfessionnelSanteType::class, $professionnelSante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $professionnelSanteRepository->save($professionnelSante, true);

            return $this->redirectToRoute('app_professionnel_sante_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('professionnel_sante/new.html.twig', [
            'professionnel_sante' => $professionnelSante,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_professionnel_sante_show', methods: ['GET'])]
    public function show(ProfessionnelSante $professionnelSante): Response
    {
        return $this->render('professionnel_sante/show.html.twig', [
            'professionnel_sante' => $professionnelSante,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_professionnel_sante_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ProfessionnelSante $professionnelSante, ProfessionnelSanteRepository $professionnelSanteRepository): Response
    {
        $form = $this->createForm(ProfessionnelSanteType::class, $professionnelSante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $professionnelSanteRepository->save($professionnelSante, true);

            return $this->redirectToRoute('app_professionnel_sante_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('professionnel_sante/edit.html.twig', [
            'professionnel_sante' => $professionnelSante,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_professionnel_sante_delete', methods: ['POST'])]
    public function delete(Request $request, ProfessionnelSante $professionnelSante, ProfessionnelSanteRepository $professionnelSanteRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$professionnelSante->getId(), $request->request->get('_token'))) {
            $professionnelSanteRepository->remove($professionnelSante, true);
        }

        return $this->redirectToRoute('app_professionnel_sante_index', [], Response::HTTP_SEE_OTHER);
    }
}
