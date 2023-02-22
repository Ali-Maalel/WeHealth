<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="app_blog")
     */
    #[Route('/blog', name: 'app_blog')]
    public function index(ArticleRepository $articleRepository, CategorieRepository $categorieRepository): Response
    {
        return $this->render('blog/blog.html.twig', [
            'articles' => $articleRepository->findAll(),
            'categories' => $categorieRepository->findAll()
        ]);
    }
}
