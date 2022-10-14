<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListandoController extends AbstractController
{
    #[Route('/listando', name: 'app_listando')]
    public function index(): Response
    {
        return $this->render('listando/index.html.twig', [
            'controller_name' => 'ListandoController',
        ]);
    }
}
