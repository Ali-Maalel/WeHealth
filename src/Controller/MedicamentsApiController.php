<?php

namespace App\Controller;

use App\Entity\Medicaments;
use App\Entity\User;
use App\Repository\MedicamentsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class APIController extends AbstractController
{
    /**
     * @Route("/api/medicaments/liste", name="api_list", methods={"GET"})
     */
    public function index(MedicamentsRepository $MedicamentsR)
    {
        // On récupère la liste des Medicaments
        $Medicaments = $MedicamentsR->apiFindAll();

        // On spécifie qu'on utilise l'encodeur JSON
        $encoders = [new JsonEncoder()];

        // On instancie le "normaliseur" pour convertir la collection en tableau
        $normalizers = [new ObjectNormalizer()];

        // On instancie le convertisseur
        $serializer = new Serializer($normalizers, $encoders);

        // On convertit en json
        $jsonContent = $serializer->serialize($Medicaments, 'json', [
            'circular_reference_handler' => function ($object) {
                return $object->getId();
            }
        ]);

        // On instancie la réponse
        $response = new Response($jsonContent);

        // On ajoute l'entête HTTP
        $response->headers->set('Content-Type', 'application/json');

        // On envoie la réponse
        return $response;
    }

    /**
     * @Route("/api/Medicaments/lire/{id}", name="api_Medicaments", methods={"GET"})
     */
    public function getMedicament(Medicaments $Medicaments)
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($Medicaments, 'json', [
            'circular_reference_handler' => function ($object) {
                return $object->getId();
            }
        ]);
        $response = new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/api/Medicaments/ajout", name="api_ajout", methods={"POST"})
     */
    public function addMedicaments(Request $request)
    {
        // On vérifie si la requête est une requête Ajax
        if($request->isXmlHttpRequest()) {
            // On instancie un nouvel Medicaments
            $Medicaments = new Medicaments();

            // On décode les données envoyées
            $donnees = json_decode($request->getContent());

            // On hydrate l'objet
            $Medicaments->setname($donnees->name);
            $Medicaments->setModeUtilisation($donnees->mode_utilisation);
            $Medicaments->setTypeMedicaments($donnees->type_medicaments);
            $user = $this->getMedicament()->get(User::class)->find(1);
            $Medicaments->set($user);

            // On sauvegarde en base
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Medicaments);
            $entityManager->flush();

            // On retourne la confirmation
            return new Response('ok', 201);
        }
        return new Response('Failed', 404);
    }

    /**
     * @Route("/api/Medicaments/editer/{id}", name="api_edit", methods={"PUT"})
     */
    public function editMedicaments(?Medicaments $Medicaments, Request $request)
    {
        // On vérifie si la requête est une requête Ajax
        //if($request->isXmlHttpRequest()) {

            // On décode les données envoyées
            $donnees = json_decode($request->getContent());

            // On initialise le code de réponse
            $code = 200;

            // Si l'Medicaments n'est pas trouvé
            if(!$Medicaments){
                // On instancie un nouvel Medicaments
                $Medicaments = new Medicaments();
                // On change le code de réponse
                $code = 201;
            }

            // On hydrate l'objet
            $Medicaments->setTitre($donnees->titre);
            $Medicaments->setContenu($donnees->contenu);
            $Medicaments->setFeaturedImage($donnees->image);
            $user = $this->getDoctrine()->getRepository(Users::class)->find(1);
            $Medicaments->setUser($user);

            // On sauvegarde en base
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Medicaments);
            $entityManager->flush();

            // On retourne la confirmation
            return new Response('ok', $code);
        //}
        return new Response('Failed', 404);
    }

    /**
     * @Route("/api/Medicaments/supprimer/{id}", name="api_supprime", methods={"DELETE"})
     */
    public function removeMedicaments(Medicaments $Medicaments)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($Medicaments);
        $entityManager->flush();
        return new Response('ok');
    }

}
