<?php

namespace App\Controller;

// use App\Entity\Trabajos;
// use App\Form\TrabajosType;
// use App\Entity\Contenidos;
// use App\Form\ContenidosType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IniciarController extends AbstractController
{
    #[Route('/Listado', name: 'app_Listado')]
    public function index(EntityManagerInterface $entityManager): Response
    {
       // $contenidos = $entityManager->getRepository(Contenidos::class)->findAll();
        return $this->render('Listado.html.twig', [
            'controller_Listando' => 'IniciarListadoController',
            // 'mostrarcontenidos' => $contenidos,
        ]);
    }
}
