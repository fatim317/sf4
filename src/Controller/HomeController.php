<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;





class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ArtistRepository $artistrepository)
    {

        // Récupérer toutes les entités
        $résultats = $artistRepository->findDjs();

        dd($resultats);

        return $this->render('..');



    }
}

