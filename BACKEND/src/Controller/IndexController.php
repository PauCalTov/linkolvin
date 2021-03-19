<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/')]
class IndexController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index()
    {
        return $this->redirect('https://localhost:8080');
        //return $this->render('index/index.html.twig');
    }
}
