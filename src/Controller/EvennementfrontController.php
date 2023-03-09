<?php

namespace App\Controller;

use App\Entity\Evennement;
use App\Entity\User;
use App\Form\EvennementType;
use App\Repository\EvennementRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Doctrine\Common\Collections\Criteria;
use DateTime;


#[Route('/evennementfront')]
class EvennementfrontController extends AbstractController
{
    #[Route('/', name: 'app_evennementfront_index', methods: ['GET'])]
    public function index(EvennementRepository $repository,FlashyNotifier $flashy,ManagerRegistry $doctrine,Request $request): Response
    {
        $query = $request->query->get('q');
    $user = $doctrine->getRepository(User::class)->find(1);
        $evennements = $repository->matching(Criteria::create()->where(Criteria::expr()->gt('dateDebut', new DateTime('now'))));
        
        $eventList = [];

foreach ($evennements as $event) {
    // Check if the user has already participated in the event
    if ($event->getParticipants()->contains($user)) {
        // If so, disable the button
        $buttonDisabled = false;
    } else {
        // Otherwise, enable the button
        $buttonDisabled = true;
    }

    if ($buttonDisabled) {
        // Add the event and the button disabled state to the list of events
        array_push($eventList, $event);
    }

    // dd($eventList);
}

        return $this->render('evennementfront/index.html.twig', [
            'evennements' => $evennements,
            'eventList' => $eventList,
            'flashy' => $flashy,
            'query' => $query,
        ]);
}

private $flashy;

public function __construct(FlashyNotifier $flashy)
{
    $this->flashy = $flashy;
}

#[Route('/myevents', name: 'app_myevennement_index', methods: ['GET'])]
public function myevents(EvennementRepository $evennementRepository, UserRepository $userRepo): Response
{
    $events = $evennementRepository->createQueryBuilder('e')
        ->join('e.participants', 'u')
        ->where('u.id = :user_id')
        ->setParameter('user_id', 1)
        ->getQuery()
        ->getResult();

        $user = $userRepo->find(1);

        $eventList = [];
        
foreach ($events as $event) {
    // dd($event->getFactures());
    // Check if the user has already participated in the event
    if ($event->getFactures()->contains($user->getFactures())) {
        // If so, disable the button
        $buttonDisabled = true;
    } else {
        // Otherwise, enable the button
        $buttonDisabled = false;
    }

    if ($buttonDisabled) {
        // Add the event and the button disabled state to the list of events
        array_push($eventList, $event);
    }

    // dd($eventList);
}

        // dd($events);

    return $this->render('evennementfront/myevents.html.twig', [
        'evennements' => $events,
        'eventList' => $eventList
    ]);
}

#[Route('/participer/{id}', name: 'app_evennement_front_participer', methods: ['GET', 'POST'])]
public function participer(Request $request,$id,ManagerRegistry $doctrine,FlashyNotifier $flashy): Response
{
    $em = $doctrine->getManager();
    $evennement = $doctrine->getRepository(Evennement::class)->find($id);
    $user = $doctrine->getRepository(User::class)->find(1);
    if($evennement->getReservations()+1<=$evennement->getMax()){
        $evennement->setReservations($evennement->getReservations()+1);
        $evennement->addParticipant($user);
        $em->persist($evennement);
        $em->flush();
        return $this->redirectToRoute('app_evennementfront_index');
    }

    return $this->redirectToRoute('app_evennementfront_index');   
   
}


    /**
     * @Route("/search", name="event_search")
     */
    public function search(Request $request, ManagerRegisrty $doctrine): Response
    {
        $query = $request->query->get('q');
        $events = $doctrine->getManager()
            ->getRepository(Evennement::class)
            ->searchEvents($query);

        return $this->render('evennement/search.html.twig', [
            'evennements' => $events,
            'query' => $query,
        ]);
    }

    #[Route('/sortByDescDate', name: 'sort_by_desc_date')]
    public function sortDescDate(EvennementRepository $repository, Request $request,ManagerRegistry $doctrine)
    {
        $query = $request->query->get('q');
    $user = $doctrine->getRepository(User::class)->find(1);
        $evennements = $repository->matching(Criteria::create()->where(Criteria::expr()->gt('dateDebut', new DateTime('now'))));
        
        $eventList = [];

foreach ($evennements as $event) {
    // Check if the user has already participated in the event
    if ($event->getParticipants()->contains($user)) {
        // If so, disable the button
        $buttonDisabled = false;
    } else {
        // Otherwise, enable the button
        $buttonDisabled = true;
    }

    if ($buttonDisabled) {
        // Add the event and the button disabled state to the list of events
        array_push($eventList, $event);
    }

    // dd($eventList);
}
        $events = $repository->sortByDescDate();
    
        return $this->render("evennementfront/index.html.twig",[
            'evennements' => $events,
            'eventList' => $eventList
        ]);
    }
    
    #[Route('/sortByAscDate', name: 'sort_by_asc_date')]
    public function sortAscDate(EvennementRepository $repository, Request $request,ManagerRegistry $doctrine)
    {
        $query = $request->query->get('q');
    $user = $doctrine->getRepository(User::class)->find(1);
        $evennements = $repository->matching(Criteria::create()->where(Criteria::expr()->gt('dateDebut', new DateTime('now'))));
        
        $eventList = [];

foreach ($evennements as $event) {
    // Check if the user has already participated in the event
    if ($event->getParticipants()->contains($user)) {
        // If so, disable the button
        $buttonDisabled = false;
    } else {
        // Otherwise, enable the button
        $buttonDisabled = true;
    }

    if ($buttonDisabled) {
        // Add the event and the button disabled state to the list of events
        array_push($eventList, $event);
    }

    // dd($eventList);
}
        $events = $repository->sortByAscDate();
    
        return $this->render("evennementfront/index.html.twig",[
            'evennements' => $events,
            'eventList' => $eventList
        ]);
    }

    #[Route('/{id}/showevent', name: 'app_evennement_showevent', methods: ['GET'])]
    public function showEventDetails(Evennement $evennement): Response
    {
        return $this->render('evennementfront/show1.html.twig', [
            'evennement' => $evennement,
        ]);
    }  

}