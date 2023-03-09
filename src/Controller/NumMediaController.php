<?php

namespace App\Controller;

use App\Entity\NumMedia;
use App\Form\NumMediaType;
use App\Repository\NumMediaRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/num/media')]
class NumMediaController extends AbstractController
{
    #[Route('/', name: 'app_num_media_index', methods: ['GET'])]
    public function index(NumMediaRepository $numMediaRepository): Response
    {
        return $this->render('num_media/index.html.twig', [
            'num_media' => $numMediaRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_num_media_new', methods: ['GET', 'POST'])]
    public function new(Request $request, NumMediaRepository $numMediaRepository): Response
    {
        $numMedia = new NumMedia();
        $form = $this->createForm(NumMediaType::class, $numMedia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $numMediaRepository->save($numMedia, true);

            return $this->redirectToRoute('app_num_media_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('num_media/new.html.twig', [
            'num_media' => $numMedia,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_num_media_show', methods: ['GET'])]
    public function show(NumMedia $numMedia): Response
    {
        return $this->render('num_media/show.html.twig', [
            'num_media' => $numMedia,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_num_media_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, NumMedia $numMedia, NumMediaRepository $numMediaRepository): Response
    {
        $form = $this->createForm(NumMediaType::class, $numMedia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $numMediaRepository->save($numMedia, true);

            return $this->redirectToRoute('app_num_media_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('num_media/edit.html.twig', [
            'num_media' => $numMedia,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_num_media_delete', methods: ['POST'])]
    public function delete(Request $request, NumMedia $numMedia, NumMediaRepository $numMediaRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$numMedia->getId(), $request->request->get('_token'))) {
            $numMediaRepository->remove($numMedia, true);
        }

        return $this->redirectToRoute('app_num_media_index', [], Response::HTTP_SEE_OTHER);
    }
    
   
}
