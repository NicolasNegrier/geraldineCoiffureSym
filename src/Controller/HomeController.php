<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'onePage')]
    public function onePage(): Response
    {
        // Récupération des datas par les repository

        // render avec les datas
        return $this->render('home.html.twig');
    }
}