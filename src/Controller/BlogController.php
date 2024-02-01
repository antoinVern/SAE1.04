<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/Documents', name: 'Documents')]
    public function Documents(): Response
    {
        return $this->render('blog/document.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/Portfolio', name: 'Portfolio')]
    public function Portfolio(): Response
    {
        return $this->render('blog/portfolio.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    #[Route('/CV', name: 'CV')]
    public function CV(): Response
    {
        return $this->render('blog/cv.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    #[Route('/APropos', name: 'APropos')]
    public function APropos(): Response
    {
        return $this->render('blog/APropos.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
}


