<?php

namespace App\Controller;

use App\Entity\Topic;
use App\Form\Topic1Type;
use App\Repository\TopicRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/topic')]
class TopicController extends AbstractController
{
    #[Route('/admin', name: 'app_topic_index', methods: ['GET'])]
    public function index(TopicRepository $topicRepository): Response
    {
        
        return $this->render('Forum_admin/index_topic.html.twig', [
            'topics' => $topicRepository->findAll(),
        ]);
    }

    #[Route('/admin/new', name: 'app_topic_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TopicRepository $topicRepository): Response
    {
        $topic = new Topic();
        $form = $this->createForm(Topic1Type::class, $topic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $topicRepository->save($topic, true);

            return $this->redirectToRoute('app_topic_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('Forum_admin/add_topic.html.twig', [
            'topic' => $topic,
            'form' => $form,
        ]);
    }

    #[Route('/admin/{id}/edit', name: 'app_topic_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Topic $topic, TopicRepository $topicRepository): Response
    {
        $form = $this->createForm(Topic1Type::class, $topic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $topicRepository->save($topic, true);

            return $this->redirectToRoute('app_topic_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('Forum_admin/edit_topic.html.twig', [
            'topic' => $topic,
            'form' => $form,
        ]);
    }

    #[Route('/admin/{id}/delete', name: 'app_topic_delete', methods: ['GET','DELETE'])]
    public function delete(Request $request, Topic $topic, TopicRepository $topicRepository): Response
    {
        $topicRepository->remove($topic, true);
        return $this->redirectToRoute('app_topic_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}', name: 'app_topic_show', methods: ['GET'])]
    public function show(Topic $topic): Response
    {
        dd("je suis la");
        return $this->render('topic/show.html.twig', [
            'topic' => $topic,
        ]);
    }
}
