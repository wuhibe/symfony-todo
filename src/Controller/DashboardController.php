<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/', methods: ['GET'], name: 'dashboard')]
    public function index(LoggerInterface $logger): Response
    {
        return $this->render('index.html.twig');
    }
}
