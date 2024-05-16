<?php

namespace App\Controller;

use App\Entity\Anime;
use App\Repository\AnimeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(AnimeRepository $animeRepository): Response
    {
        $animes = $animeRepository->findBy([], ['nom' => 'ASC']);

        return $this->render('/index.html.twig', [
            'animes' => $animes,
        ]);
    }
}
