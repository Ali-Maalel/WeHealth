<?php

namespace App\Controller;


use App\Entity\Evennement;
use App\Entity\Coach;
use App\Entity\Notification;
use App\Entity\User;    
use App\Repository\CoachRepository;
use App\Form\EvennementType;
use App\Repository\EvennementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

#[Route('/evennement')]
class EvennementController extends AbstractController
{
    #[Route('/', name: 'app_evennement_index', methods: ['GET'])]
    public function index(EvennementRepository $evennementRepository): Response
    {
        return $this->render('evennement/index.html.twig', [
            'evennements' => $evennementRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_evennement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EvennementRepository $evennementRepository, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $event = new Evennement();
        $form = $this->createForm(EvennementType::class, $event);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $file = $request->files->get('evennement')['image'];
            $uploads_directory = $this->getParameter('uploads_directory');
            $filename = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($uploads_directory, $filename);
            $event->setImage($filename);
            $em->persist($event);
            $em->flush();

            return $this->redirectToRoute('app_evennement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evennement/new.html.twig', [
            'evennement' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_evennement_show', methods: ['GET'])]
    public function show(Evennement $evennement): Response
    {
        return $this->render('evennement/show.html.twig', [
            'evennement' => $evennement,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_evennement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evennement $evennement, EvennementRepository $evennementRepository): Response
    {
        $form = $this->createForm(EvennementType::class, $evennement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $request->files->get('evennement')['image'];
            if ($file) {
                // Delete the old image file
                $uploads_directory = $this->getParameter('uploads_directory');
                $old_file = $evennement->getImage();
                if ($old_file) {
                    $old_file_path = $uploads_directory . '/' . $old_file;
                    if (file_exists($old_file_path)) {
                        unlink($old_file_path);
                    }
                }
                // Upload the new image file
                $filename = md5(uniqid()) . '.' . $file->guessExtension();
                $file->move($uploads_directory, $filename);
                $evennement->setImage($filename);
            }
            $evennementRepository->save($evennement, true);
           

            return $this->redirectToRoute('app_evennement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evennement/edit.html.twig', [
            'evennement' => $evennement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_evennement_delete', methods: ['POST'])]
    public function delete(Request $request, Evennement $evennement, EvennementRepository $evennementRepository): Response
    {

       

        
        if ($this->isCsrfTokenValid('delete'.$evennement->getId(), $request->request->get('_token'))) {
            $evennementRepository->remove($evennement, true);
            
        }
        
         return $this->redirectToRoute('app_evennement_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}/showdetails', name: 'app_evennement_showevent', methods: ['GET'])]
    public function showEventDetails(Evennement $evennement): Response
    {
        return $this->render('evennementfront/show1.html.twig', [
            'evennement' => $evennement,
        ]);
    }
}


