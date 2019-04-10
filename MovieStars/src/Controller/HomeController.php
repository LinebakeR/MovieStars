<?php

namespace App\Controller;

use Tmdb\Client;
use Tmdb\ApiToken;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Tmdb\Api\Movies;
use Symfony\Component\Validator\Constraints as Assert;



class HomeController extends AbstractController{

    /**
     * @Route("/", name="movies")
     * @return Response
     */
    public function index(){

        $token  = new ApiToken("cea3e776cf0ad1a0e764b72aa0236425");
        $client = new Client($token);
        $movie = $client->getMoviesApi()->getPopular();
        
 
        dump($movie);
        return $this->render('pages/home.html.twig', [
            'movies' => $movie,
        ]);
    }

    /**
     * @Route ("/{id}", name="details", requirements={"id": "\d+"})
     */
    public function movieScript($id){

        $token  = new ApiToken("cea3e776cf0ad1a0e764b72aa0236425");
        $client = new Client($token);
        $script = $client->getMoviesApi()->getMovie($id);
        dump($script);
        return $this->render('pages/movieDetail.html.twig', [
            'script' => $script,
        ]);
    }



}
