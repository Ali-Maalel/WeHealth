<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DiscussionController extends AbstractController
{
    #[Route('/discussion', name: 'app_discussion')]
    public function index(): Response
    {
        return $this->render('discussion/index.html.twig', [
            'controller_name' => 'DiscussionController',
        ]);
    }
}
class DiscussionController extends AbstractController
{
    #[Route('/discussion/new', name: 'app_discussion_new')]
    public function new(Request $request, DiscussionRepository $DiscussionRepository): Response
    {
        $discussion = new Discussion();

        $form = $this->createForm(DiscussionFormType::class, $discussion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $DiscussionRepository->persist($discussion);
            $DiscussionRepository->flush();

            $this->addFlash('success', 'La discussion a bien été ajoutée.');

            return $this->redirectToRoute('app_discussion');
        }

        return $this->render('discussion/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
class DiscussionController extends AbstractController
{
    #[Route('/discussion/{id}', name: 'app_discussion_show', requirements: ['id' => '\d+'])]
    public function show(Discussion $discussion): Response
    {
        return $this->render('discussion/show.html.twig', [
            'discussion' => $discussion,
        ]);
    }
}
class DiscussionController extends AbstractController
{
    #[Route('/discussion/{id}/edit', name: 'app_discussion_edit', requirements: ['id' => '\d+'])]
    public function edit(Request $request, Discussion $discussion): Response
    {
        $form = $this->createForm(DiscussionFormType::class, $discussion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $DiscussionRepository = $this->getDoctrine()->getManager();
            $DiscussionRepository->flush();

            return $this->redirectToRoute('app_discussion_show', ['id' => $discussion->getId()]);
        }

        return $this->render('discussion/edit.html.twig', [
            'form' => $form->createView(),
            'discussion' => $discussion,
        ]);
    }
}
class DiscussionController extends AbstractController
{
    #[Route('/discussion/delete/{id}', name: 'app_discussion_delete')]
    public function delete(Request $request, DiscussionRepository $DiscussionRepository, int $id): Response
    {
        $discussion = $DiscussionRepository->getRepository(Discussion::class)->find($id);

        if (!$discussion) {
            throw $this->createNotFoundException('La discussion que vous cherchez n\'existe pas.');
        }

        $DiscussionRepository->remove($discussion);
        $DiscussionRepository->flush();

        $this->addFlash('success', 'La discussion a bien été supprimée.');

        return $this->redirectToRoute('app_discussion');
    }
}

