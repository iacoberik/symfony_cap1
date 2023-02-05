<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController extends AbstractController
{
    #[Route('/')]
    public function homePage(): Response
    {

        $tracks = [
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'Waterfalls', 'artist' => 'TLC'],
            ['song' => 'Creep', 'artist' => 'Radiohead'],
            ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
            ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
            ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
        ];

        return $this->render('/vinyl/homepage.html.twig', [
            'title' => 'PB & James',
            'tracks' => $tracks
        ]);
    }

    #[Route('/browse/{slug}')]
    public function search(string $slug = null):Response
    {
        $slug ? $title = 'Genre: '.ucwords(str_replace('-', ' ', $slug)) : $title = 'All Genres';

        return new Response($title);
    }


}