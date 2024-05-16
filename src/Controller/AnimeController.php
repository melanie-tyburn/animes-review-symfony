<?php

namespace App\Controller;

use App\Entity\Anime;
use App\Form\AnimeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnimeController extends AbstractController
{
    /**
     * @Route("/ajouter-anime", name="ajouter_anime")
     */
    public function ajouterAnime(Request $request, EntityManagerInterface $entityManager): Response
    {
        $anime = new Anime();
        $form = $this->createForm(AnimeType::class, $anime);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($anime);
            $entityManager->flush();

            return $this->redirectToRoute('accueil'); // Redirigez vers une autre page après l'ajout
        }

        return $this->render('ajouter_anime.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}