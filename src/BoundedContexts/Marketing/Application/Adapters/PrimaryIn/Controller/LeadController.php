<?php

namespace App\BoundedContexts\Marketing\Application\Adapters\PrimaryIn\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LeadController extends AbstractController
{
    #[Route('/lead/hello')]
    public function index(Request $request): Response
    {
        return new Response("Hello Lead!");
    }
}
