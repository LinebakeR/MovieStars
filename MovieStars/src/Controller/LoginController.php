<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environnement;

class LoginController extends AbstractController{

    /**
    *@Route("/login", name="login.index");
    *@return Response
    */
    public function index() : Response{

    return new Response ('Page de connexion');
}

    

}