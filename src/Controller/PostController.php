<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\Post2Type;
use App\Entity\PostLike;
use App\Form\SearchPostType;
use App\Repository\PostRepository;
use App\Repository\TopicRepository;
use App\Repository\PostLikeRepository;
use App\Repository\CommentaireRepository;
use App\Repository\MediaRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Common\Persistence\ManagerRegistry;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Serializer\Encoder\JsonEncoder;





#[Route('/post')]
class PostController extends AbstractController
{      private $em;
    #[Route('/', name: 'app_post_index', methods: ['GET'])]
    public function index(PostRepository $postRepository, TopicRepository $topicRepository, CommentaireRepository $commentaireRepository, MediaRepository $mediaRepository): Response
    {
        $a = $topicRepository->retrieveHydratedTopics();
        
        return $this->render('Forum/forum_layout.html.twig', [
            'forum_items' => $postRepository->findAll(),
            'topics' => $topicRepository->findAll(),
            'commentaires' => $commentaireRepository->findAll(),
            'media' => $mediaRepository->findAll(),
        ]);
    }

    #[Route('/admin', name: 'app_post_index_admin', methods: ['GET', 'POST'])]
    public function index_admin(Request $request, PostRepository $postRepository, TopicRepository $topicRepository): Response
    {
        $forum_items = $postRepository->findAll();

        $condition = array();
        $form = $this->createForm(SearchPostType::class);
        $search = $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $forum_items = $postRepository->search($search->get('mots')->getData());

        }
        if(count($condition)=== 0){
            return $this->render('Forum_admin/index_post.html.twig', [
                'forum_items' => $forum_items,
                'form' => $form->createView()
            ]);
        }
        
    }

    
    #[Route('/admin/new', name: 'app_post_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PostRepository $postRepository): Response
    {
        $post = new Post();
       
        $form = $this->createForm(Post2Type::class, $post);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $postRepository->save($post, true);

            return $this->redirectToRoute('app_post_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('Forum_admin/add_post.html.twig', [
            'post' => $post,
            'form' => $form,
        ]);
    }
    

    #[Route('/admin/{id}/edit', name: 'app_post_edit_admin', methods: ['GET','POST'])]
    public function edit(Request $request, Post $post, PostRepository $postRepository): Response
    {
        
        $form = $this->createForm(Post2Type::class, $post);
        $form->handleRequest($request);
      
        if ($form->isSubmitted() && $form->isValid()) {
            $postRepository->save($post, true);

            return $this->redirectToRoute('app_post_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('Forum_admin/edit_post.html.twig', [
            'post' => $post,
            'form' => $form,
        ]);
    }

    #[Route('/admin/{id}/delete', name: 'app_post_delete', methods: ['GET','DELETE'])]
    public function delete(Request $request, Post $post, PostRepository $postRepository): Response
    {
       
            $postRepository->remove($post, true);
            return $this->redirectToRoute('app_post_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/admin/{id}/like', name: 'app_post_like', methods: ['GET','POST'])]
    public function like(Request $request, Post $post, PostRepository $postRepository): Response
    {
            $count = $post->getLike_count();
            $count = $count + 1;
            $post->setLike_count($count);
            $postRepository->save($post, true);
            return $this->redirectToRoute('app_post_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/admin/{id}/dislike', name: 'app_post_dislike', methods: ['GET','POST'])]
    public function dislike(Request $request, Post $post, PostRepository $postRepository): Response
    {
            $count = $post->getDislike_count();
           
                $count = $count + 1;
            
            $post->setDislike_count($count);
            $postRepository->save($post, true);
            return $this->redirectToRoute('app_post_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}', name: 'app_post_show', methods: ['GET'])]
    public function show(Post $post): Response
    {
        return $this->render('Forum/Forum_details.html.twig', [
            'post' => $post,
        ]);
    }
       /*
    #[Route("/nblike", name: "post_likenb" , methods: ['GET'])]
    
   public function nblikejson(PostLikeRepository $likeRepository , Request $request):Response
   {
       $p=$request->get("idpost");
       $post=$this->getDoctrine()->getManager()->getRepository(Post::class)->findOneBy(array('id' => $p),null,1,0);
       return $this->json($likeRepository->count(['post'=>$post]));


   }
 


      #[Route("/{id}/like", name: "post_like" , methods: ['GET'])]
    public function like(Post $post , EntityManagerInterface $manager, PostLikeRepository $likeRepository ):Response
    {
          $user=$this->getUser();
          if (!$user) return $this->json(['code'=>403,'message'=>"unauthorized"],403);
 
          if ($post->isLikeByUser($user)){
              $like=$likeRepository->findOneBy(['post'=>$post , 'Client'=>$user]);
              $manager->remove($like);
              $manager->flush();
 
              return $this->json([
                  'code'=>200,
                  'message'=>'Like bien supprimé',
                  'likes' => $likeRepository->count(['post'=>$post])
              ],200);
          }
 
          $like= new PostLike();
          $like->setPost($post)->setClient($user);
          $manager->persist($like);
          $manager->flush();
 
          return $this->json(['code'=> 200 ,
              'message'=> 'Like bien ajoutee',
              'likes'=>$likeRepository->count(['post'=>$post])
          ],200);
 
    }
 
   /*************************JSON********************************/

   #[Route('/AllPostJson', name: 'listPosts', methods: ['GET'])]
   public function getPosts(PostRepository $repo, SerializerInterface $serialiser)
   {     
       
       $Post= $repo->findAll();
        $json=$serialiser->serialize($Post ,'json',['groups'=>"posts"]);
        return new Response ($json);
   }

   #[Route("/addPostJson/new", name: "addPostJson")]
   public function addPostJson(Request $req,   NormalizerInterface $Normalizer)
   {
             $em;
       
       $Post = new Post();
       //$created_at=$req->query->get("created_at");
       //$last_at=$req->query->get("last_at");
       $content = $req->query->get("content");
       $titre = $req->query->get("titre");
       $auteur = $req->query->get("auteur");
       $liste_commentaire=$req->query->get("liste_commentaire");
       $em = $this->getDoctrine()->getManager();
       $topic = $req->query->get("topic");
         $created_at = new \DateTime('now');
      // $image=$req->query->get("image");
       
       //$date = new \DateTime('now');

       //$Post->setImgForum($image);
       //$Post->setCreatedAt($created_at);
       //$Post->setLastAt($last_at);
       $Post->setContent($content);
       $Post->setAuteur($auteur);
       $Post->setListeCommentaire($liste_commentaire);
       $Post->setTitre($titre);
       $Post->setTopic($topic);

       $em->persist($Post);
       $em->flush();

       $jsonContent = $Normalizer->normalize($Post, 'json', ['groups' => "posts"]);
       //return new Response(json_encode($jsonContent));
       return $this->json($Post,200,[],['groups'=>'posts']);

   }

   
    /******************Modifier Post*****************************************/

   #[Route("/updatePostJson/{id}", name: "updatePostJson")]
    public function updatePostJson(Request $req, $id, NormalizerInterface $Normalizer){
       
   $em = $this->getDoctrine()->getManager();
 // $Post = $em->getDoctrine()->getManager()
 
   $Post = $em->getRepository(Post::class)->find($req->get("id"));

   $Post->setTitre($req->get("titre"));
   $Post->setContent($req->get("content"));
   $Post->setLastAt($req->get("last_at"));
   $Post->setAuteur($req->get("auteur"));
   $Post->setTopic($req->get("topic"));

   $em->persist($Post);
   $em->flush();
   //$jsonContent = $Normalizer->normalizer($post, 'json',['groups'=>'posts'] )
   $serializer = new Serializer([new ObjectNormalizer()]);
   $formatted = $Serializer->normalize("Post a ete modifiee avec success.");
   return new JsonResponse($formatted);
   

   }



    /******************Supprimer Post*****************************************/

   
   #[Route("/deletePostJson/{id}", name: "deletePostJson")]
    public function deletePostJson(Request $request, NormalizerInterface $Normalizer) {

       $id = $request->get("id");

       $em = $this->getDoctrine()->getManager();
       $Post = $em->getRepository(Post::class)->find($id);
       if($Post!=null ) {
           $em->remove($Post);
           $em->flush();

           $serialize = new Serializer([new ObjectNormalizer()]);
           $formatted = $serialize->normalize("Post a ete supprimee avec success.");
           return new JsonResponse($formatted);

       }
       return new JsonResponse("id Post invalide.");


   }

}



