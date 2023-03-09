<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EvennementRepository;
use App\Entity\Evennement;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'appadmin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            
        ]);
    }
    #[Route('/calendar', name: 'app_admin')]
    public function index1(EvennementRepository $evennementRepository): Response
    {
        $events = $evennementRepository->findAll();

        $rdvs = [];

        foreach($events as $event){
            $rdvs[] = [
                'id' => $event->getId(),
                'start' => $event->getDateDebut()->format('Y-m-d H:i:s'),
                'end' => $event->getDateFin()->format('Y-m-d H:i:s'),
                'title' => $event->getTitre(),
                'description' => $event->getDescription(),
                'backgroundColor' => $event->getTitre(),
                'borderColor' => $event->getTitre(),
                'textColor' => $event->getTitre(),
                'allDay' => $event->isAllDay(),
            ];
        }

        $data = json_encode($rdvs);
        
        return $this->render('admin/calendar.html.twig',[
            'controller_name' => 'AdminController',
        'evenements' => $events,
            'data' => $data,
       ]);
    }

    
    /**
     * @Route("/api/{id}/edit", name="api_event_edit", methods={"PUT"})
     */
    public function majEvent(?Evennement $event, Request $request)
    {
        // On récupère les données
        $donnees = json_decode($request->getContent());

        if(
            isset($donnees->title) && !empty($donnees->title) &&
            isset($donnees->start) && !empty($donnees->start) &&
            isset($donnees->description) && !empty($donnees->description) &&
            isset($donnees->backgroundColor) && !empty($donnees->backgroundColor) &&
            isset($donnees->borderColor) && !empty($donnees->borderColor) &&
            isset($donnees->textColor) && !empty($donnees->textColor)
        ){
            // Les données sont complètes
            // On initialise un code
            $code = 200;

            // On vérifie si l'id existe
            if(!$event){
                // On instancie un rendez-vous
                $event = new Evennement;

                // On change le code
                $code = 201;
            }

            // On hydrate l'objet avec les données
            $event->setTitre($donnees->title);
            $event->setDescription($donnees->description);
            $event->setDateDebut(new DateTime($donnees->start));
            if($donnees->allDay){
                $event->setDateFin(new DateTime($donnees->start));
            }else{
                $event->setDateFin(new DateTime($donnees->end));
            }
            $event->setAllDay($donnees->allDay);

            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();

            // On retourne le code
            return new Response('Ok', $code);
        }else{
            // Les données sont incomplètes
            return new Response('Données incomplètes', 404);
        }


        return $this->render('api/index.html.twig', [
            'controller_name' => 'ApiController',
        ]);
    }

}
