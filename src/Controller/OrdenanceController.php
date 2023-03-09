<?php

namespace App\Controller;

use App\Entity\Ordenance;
use App\Form\OrdenanceType;
use App\Repository\OrdenanceRepository;
use phpDocumentor\Reflection\PseudoTypes\False_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\options;

#[Route('/ordenance')]
class OrdenanceController extends AbstractController
{
    #[Route('/', name: 'app_ordenance_index', methods: ['GET'])]
    public function index(OrdenanceRepository $ordenanceRepository): Response
    {
        return $this->render('ordenance/index.html.twig', [
            'ordenances' => $ordenanceRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_ordenance_new', methods: ['GET', 'POST'])]
    public function new(Request $request, OrdenanceRepository $ordenanceRepository): Response
    {
        $ordenance = new Ordenance();
        $form = $this->createForm(OrdenanceType::class, $ordenance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ordenanceRepository->save($ordenance, true);

            return $this->redirectToRoute('app_ordenance_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ordenance/new.html.twig', [
            'ordenance' => $ordenance,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_ordenance_show', methods: ['GET'])]
    public function show(Ordenance $ordenance): Response
    {
        return $this->render('ordenance/show.html.twig', [
            'ordenance' => $ordenance,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_ordenance_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Ordenance $ordenance, OrdenanceRepository $ordenanceRepository): Response
    {
        $form = $this->createForm(OrdenanceType::class, $ordenance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ordenanceRepository->save($ordenance, true);

            return $this->redirectToRoute('app_ordenance_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ordenance/edit.html.twig', [
            'ordenance' => $ordenance,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_ordenance_delete', methods: ['POST'])]
    public function delete(Request $request, Ordenance $ordenance, OrdenanceRepository $ordenanceRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ordenance->getId(), $request->request->get('_token'))) {
            $ordenanceRepository->remove($ordenance, true);
        }

        return $this->redirectToRoute('app_ordenance_index', [], Response::HTTP_SEE_OTHER);
    }
    
    #[Route('/printordonnance/{id}', name: 'print_ordonnance')]
    public function ordenancePDF($id,OrdenanceRepository $repo)
    {
        $pdfOptions = new Options();
        $pdfOptions ->set('defaultFont' , 'Arial');
        $pdfOptions ->setIsRemoteEnabled(true);
        $dompdf = new Dompdf();
        $context = stream_context_create([
            'ssl'=>[
                'verify_peer' => False,
                'verify_peer_name' =>False,
                'allow_self_signed' => True,
            ]
            ]);
            $dompdf ->setHttpContext($context);
            $ordenance = $repo ->find($id);
            $html = $this->renderView('ordenance/index.html.twig',['ordenance'=>$ordenance]

        );
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // On génère un nom de fichier
        $fichier = 'ordenance'. $ordenance->getId() .'.pdf';

        // On envoie le PDF au navigateur
        $dompdf->stream($fichier, [
            'Attachment' => true
        ]);

        return new Response();
    
    }
}

