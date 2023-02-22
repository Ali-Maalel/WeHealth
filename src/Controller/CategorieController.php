<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/categories', name: 'categories')]
    public function list(): Response
    {
        $categories = $this->entityManager->getRepository(Categorie::class)->findAll();

        return $this->render('categorie/list.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/categorie/{id}', name: 'categorie_show')]
    public function show(int $id, ArticleRepository $articleRepository): Response
    {
        $categorie = $this->entityManager->getRepository(Categorie::class)->find($id);

        if (!$categorie) {
            return $this->redirectToRoute('app_blog');
        }

        $articles = $articleRepository->findByCategorie($categorie);

        return $this->render('categorie/show.html.twig', [
            'categorie' => $categorie,
            'articles' => $articles,
        ]);
    }
}
