<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'dashboard')]
    public function number(): Response
    {
        return $this->render('index.html.twig');
    }
}
