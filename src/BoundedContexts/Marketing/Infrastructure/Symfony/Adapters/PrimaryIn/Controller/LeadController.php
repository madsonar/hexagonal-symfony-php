<?php

namespace App\BoundedContexts\Marketing\Infrastructure\Symfony\Adapters\PrimaryIn\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\BoundedContexts\Marketing\Application\UseCases\LeadSaveUseCase;
use App\BoundedContexts\Marketing\CoreDomain\Entities\Lead;

class LeadController extends AbstractController
{
    public function __construct(
        private LeadSaveUseCase $leadSaveUseCase
    ) {
    }

    #[Route('/lead/save', methods: ['POST'])]
    public function save(Request $request): Response
    {
        $data = json_decode($request->getContent(), true);

        $lead = new Lead(
            id: 0,  // ID será gerado pelo banco de dados
            name: $data['name'],
            email: $data['email'],
            phone: $data['phone']
        );

        $this->leadSaveUseCase->execute($lead);

        return new Response('Lead saved successfully!', Response::HTTP_OK);
    }

    #[Route('/lead/hello')]
    public function index(Request $request): Response
    {
        return new Response("Hello Lead!");
    }
}
