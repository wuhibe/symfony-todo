<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/', methods: ['GET'], name: 'dashboard')]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }

    #[Route('/api', methods: ['GET'], name: 'api')]
    public function api(): Response
    {
        $apiArray = [
            'message' => 'Welcome to your new API!',
            'response' => [
                'status' => 'success',
                'code' => 200,
            ],
        ];
        return $this->json($apiArray);
    }
}
