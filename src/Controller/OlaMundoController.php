<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class OlaMundoController extends AbstractController
{
    #[Route('/ola/mundo', name: 'app_ola_mundo')]
    public function index(Request $request): Response
    {
        //dd($request);
        return $this->render('ola_mundo/index.html.twig', [
            'controller_name' => 'OlaMundoController' . $_GET['name'],
        ]);
    }
}
