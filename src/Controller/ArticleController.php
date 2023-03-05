<?php

namespace App\Controller;

use Dompdf\Dompdf;
use App\Entity\Article;
use App\Entity\ArticleLike;
use App\Entity\User;
use App\Entity\Comment;
use App\Form\ArticleType;
use App\Form\CommentType;
use App\Repository\ArticleLikeRepository;
use Symfony\Flex\Options;
use Dompdf\Options as DompdfOptions;
use App\Repository\CommentRepository;
use App\Repository\ArticleRepository;
use App\Repository\UserRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use phpDocumentor\Reflection\PseudoTypes\True_;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


#[Route('/article')]
class ArticleController extends AbstractController
{
    public $user;

    public function __construct(UserRepository  $userRepository, private ManagerRegistry $doctrine)
    {
        $this->user = $userRepository->findOneBy(['id' => 1]);
    }

    #[Route('/', name: 'app_article_index', methods: ['GET'])]
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('article/index.html.twig', [
            'articles' => $articleRepository->findAll(),
        ]);
    }
    #[Route('/view_content/{id}', name: 'view_article_content')]
    public function view_article_content(ArticleRepository $articleRepository, $id): Response
    {
        $article = $articleRepository->find($id);
        if (!$article) {
            throw $this->createNotFoundException('L\'article avec l\'id ' . $id . ' n\'existe pas');
        }

        return $this->render('article/view_content.html.twig', [
            'article' => $article,
        ]);
    }


    #[Route('/new', name: 'app_article_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ArticleRepository $articleRepository): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $article->setCreatedAt(new DateTime('now'));
            $articleRepository->save($article, true);
            $this->addFlash('success', 'success');

            return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
        }


        return $this->renderForm('article/new.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }


    #[Route('/article/{id}', name: 'article_show', methods: ['GET', 'POST'])]
    public function showf(?Article $article, Request $request, CommentRepository $commentRepository): Response
    {
        if (!$article) {
            return $this->redirectToRoute('app_blog');
        }
        $liked = false;
        $list = $article->getArticleLikes();
        foreach ($list as $u) {
            if ($u->getUser()->getId() == $this->user->getId()) {
                $liked = true;
            }
        }
        $comment = new Comment($article, $this->user);

        $commentForm = $this->createForm(CommentType::class, $comment);
        $commentForm->handleRequest($request);

        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            $comment->setCreatedAt(new \DateTime('now'));
            $commentRepository->save($comment, true);
            $comment = new Comment($article, $this->user);
        }
        return $this->renderForm('article front/show.html.twig', [
            'article' => $article,
            'commentForm' => $commentForm,
            'liked' => $liked


        ]);
    }
    #[Route('/{id}', name: 'app_article_show', methods: ['GET'])]
    public function show(Article $article): Response
    {
        return $this->render('article/show.html.twig', [
            'article' => $article,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_article_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Article $article, ArticleRepository $articleRepository): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $articleRepository->save($article, true);

            return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('article/edit.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_article_delete', methods: ['POST'])]
    public function delete(Request $request, Article $article, ArticleRepository $articleRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $article->getId(), $request->request->get('_token'))) {
            $articleRepository->remove($article, true);
        }

        return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/ArticlePdf/{id}', name: 'app_PdfArticle')]
    public function impressionPDF(ManagerRegistry $doctrine, ArticleRepository $repo, $id)
    {

        dump($id); // Ajout de la fonction dump() pour afficher la valeur de $id
        $article = $repo->find($id);
        dump($article);
        $pdfOptions = new Options();
        $pdfOptions->get('defaultFont', 'Arial');
        $dompdf = new Dompdf($pdfOptions);
        $html = $this->renderView('Article front/PDF.html.twig', [
            'article' => $article,
        ]);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream('MonArticle'.$id.'.pdf', [
            'Attachment' => true,
        ]);
    }
    #[Route('/likeArticle/{id}', name: 'article_like')]
    public function likeArticle(?Article $article, ArticleRepository $articleRepository, ArticleLikeRepository $articleLikeRepository): Response
    {
        $article = $articleRepository->findOneBy(['id' => $article->getId()]);
        $articleLike = new ArticleLike();
        $articleLike->setArticle($article);
        $articleLike->setUser($this->user);
        $entityManager = $this->doctrine->getManager();
        $entityManager->persist($articleLike);
        $entityManager->flush();
        return $this->redirectToRoute('article_show', ["id" => $article->getId()]);
    }
    #[Route('/dislikeArticle/{id}', name: 'article_dislike')]
    public function dislikeArticle(?Article $article, ArticleRepository $articleRepository, ArticleLikeRepository $articleLikeRepository): Response
    {
        $article = $articleRepository->findOneBy(['id' => $article->getId()]);
        $articleLike = $articleLikeRepository->findOneBy(['user'=>$this->user,'article'=>$article]);
        $entityManager = $this->doctrine->getManager();
        $entityManager->remove($articleLike);
        $entityManager->flush();
        return $this->redirectToRoute('article_show', ["id" => $article->getId()]);
    }
}
