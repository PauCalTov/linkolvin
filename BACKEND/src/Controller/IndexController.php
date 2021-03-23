<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

#[Route('/')]
class IndexController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index()
    {        
        return $this->render('index/index.html.twig');
    }
    #[Route('/logged', name: 'logged')]
    public function logged()
    {               
       if(in_array('ROLE_COMPANY', $this->getUser()->getRoles(), true) && !($this->getUser()->isVerified())){
            return $this->redirectToRoute('empresa_new');
       }
       else{
            return $this->redirectToRoute('index');
       }
    }
}
