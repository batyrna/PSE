<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BatyrPersonalPageController extends AbstractController
{
    #[Route('/batyr', name: 'app_batyr_personal_page')]
    public function index(): Response
    {
        return $this->render('personal_page/batyr.html.twig');
    }
} 