<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environnement;

class RegisterController extends AbstractController{

    /**
    *@Route("/register", name="register.index");
    *@return Response
    */
    public function index(): Response{

    return new Response ("login");
}

    

}
