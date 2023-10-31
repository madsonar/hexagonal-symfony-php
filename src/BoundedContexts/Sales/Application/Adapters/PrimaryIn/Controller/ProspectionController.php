<?php

namespace App\BoundedContexts\Sales\Application\Adapters\PrimaryIn\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProspectionController extends AbstractController
{
    #[Route('/prospection/hello')]
    public function index(Request $request): Response
    {
        return new Response("Hello Prospection!");
    }
}
