<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environnement;

class LoginController extends AbstractController{

    /**
    *@Route("/login", name="login.index");
    *
    */
    public function index($connected = false) : Response{
    return $this->render('Pages/login.html.twig');
}

}
