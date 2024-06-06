<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_german_words')]
    public function index(): Response
    {
        $number = random_int(0, 100);
        return $this->render('german.html.twig', [
            'number' => $number,
        ]);
    }
}
