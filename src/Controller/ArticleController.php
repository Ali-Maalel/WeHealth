<?php

namespace App\Controller;

use App\Entity\Categorie;
use Dompdf\Dompdf;
use App\Entity\Article;
//use Badcow\CensorWords\CensorWords;
use Snipe\BanBuilder\CensorWords;
use App\Entity\ArticleLike;
use App\Entity\User;
use App\Entity\Comment;
use App\Form\ArticleType;
use App\Form\CommentType;
use App\Repository\ArticleLikeRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
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

    #[Route('/json/getAll', name: 'app_article_index_json', methods: ['GET'])]
    public function index_JSON(SerializerInterface $serializer, ArticleRepository $articleRepository): JsonResponse
    {
        $articles = $articleRepository->findAll();
        $json = $serializer->serialize($articles, 'json', [
            AbstractNormalizer::IGNORED_ATTRIBUTES => ['categorie', 'comments', 'featuredImage', 'articleLikes'],
        ]);

        return new JsonResponse($json, 200, [], true);
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
    #[Route('/json/new', name: 'create_article', methods: ['GET'])]
    public function createArticleAction(Request $request, EntityManagerInterface $em): JsonResponse
    {
        // Get the article data from the request query parameters
        $title = $request->query->get('titre');
        $content = $request->query->get('contenu');
        $featuredText = $request->query->get('featuredText');
        $categoryId = $request->query->get('categoryId');


        // Create a new article entity and set its data
        $article = new Article();
        $article->setTitre($title);
        $article->setContenu($content);
        $article->setFeaturedText($featuredText);
        $article->setCreatedAt(new DateTime());


        // Get the category from the database and set it on the article
        $category = $em->getRepository(Categorie::class)->find($categoryId);
        $article->setCategorie($category);

        // Persist the article to the database
        $em->persist($article);
        $em->flush();

        // Return a JSON response with the created article data
        $data = [
            'id' => $article->getId(),
            'title' => $article->getTitre(),
            'content' => $article->getContenu(),
            'featuredText' => $article->getFeaturedText(),
            'createdAt' => $article->getCreatedAt()->format('Y-m-d H:i:s'),
            'updatedAt' => $article->getUpdatedAt() ? $article->getUpdatedAt()->format('Y-m-d H:i:s') : null,
            'categoryId' => $article->getCategorie()->getId(),
            'categoryName' => $article->getCategorie()->getNom(),
        ];
        return new JsonResponse($data, JsonResponse::HTTP_CREATED);
    }


    #[Route('/json/edit', name: 'create_article_edit', methods: ['GET'])]
    public function editArticleAction(Request $request, EntityManagerInterface $em, ArticleRepository $articleRepository): JsonResponse
    {
        // Get the article data from the request query parameters
        $title = $request->query->get('title');
        $id = $request->query->get('id');
        $content = $request->query->get('content');
        $featuredText = $request->query->get('featuredText');
        $categoryId = $request->query->get('categoryId');

        // Create a new article entity and set its data
        $article = $articleRepository->find($id);
        $article->setTitre($title);
        $article->setContenu($content);
        $article->setFeaturedText($featuredText);

        // Get the category from the database and set it on the article
        $category = $em->getRepository(Categorie::class)->find($categoryId);
        $article->setCategorie($category);

        // Persist the article to the database
        $em->persist($article);
        $em->flush();

        // Return a JSON response with the created article data
        $data = [
            'id' => $article->getId(),
            'title' => $article->getTitre(),
            'content' => $article->getContenu(),
            'featuredText' => $article->getFeaturedText(),
            'createdAt' => $article->getCreatedAt()->format('Y-m-d H:i:s'),
            'updatedAt' => $article->getUpdatedAt() ? $article->getUpdatedAt()->format('Y-m-d H:i:s') : null,
            'categoryId' => $article->getCategorie()->getId(),
            'categoryName' => $article->getCategorie()->getNom(),
        ];
        return new JsonResponse($data, JsonResponse::HTTP_CREATED);
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

    #[Route('/json/delete', name: 'app_article_delete_JSON', methods: ['GET'])]
    public function delete_JSON(Request $request, ArticleRepository $articleRepository, EntityManagerInterface $entityManager): JsonResponse
    {
        $id = $request->get('id');
        $article = $articleRepository->find($id);

        if ($article) {
            $entityManager->remove($article);
            $entityManager->flush();

            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize('Article has been deleted successfully.');
            return new JsonResponse($formatted);
        }

        $formatted = ['error' => 'Invalid article ID.'];
        return new JsonResponse($formatted, Response::HTTP_NOT_FOUND);
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
        $cleanedComment = null;
        $commentForm = $this->createForm(CommentType::class, $comment);
        $commentForm->handleRequest($request);

        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            $comment->setCreatedAt(new \DateTime('now'));

            // Vérifier si le contenu du commentaire contient des mots inappropriés
            $contenuComment = $commentForm->get('contenu')->getData();
            $censor = new CensorWords;
            $badwords = $censor->setDictionary('fr');
            $cleanedComment = $censor->censorString($contenuComment);
            if (!empty($cleanedComment['dirty'])) {
                echo "Le commentaire contient les mots inappropriés suivants : " . implode(", ", $cleanedComment['dirty']);
            }
            $comment->setContenu($cleanedComment['clean']);

            $commentRepository->save($comment, true);
            $comment = new Comment($article, $this->user);
        }
        return $this->renderForm('article front/show.html.twig', [
            'article' => $article,
            'commentForm' => $commentForm,
            'liked' => $liked,
            'cleanedComment' => $cleanedComment
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
        $dompdf->stream('MonArticle' . $id . '.pdf', [
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
        $articleLike = $articleLikeRepository->findOneBy(['user' => $this->user, 'article' => $article]);
        $entityManager = $this->doctrine->getManager();
        $entityManager->remove($articleLike);
        $entityManager->flush();
        return $this->redirectToRoute('article_show', ["id" => $article->getId()]);
    }
}
