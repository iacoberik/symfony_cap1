<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController
{
    #[Route('/')]
    public function homePage(): Response
    {
        return new Response('Title: PB and James');
    }

    #[Route('/browse/{slug}')]
    public function search(string $slug = null):Response
    {
        $slug ? $title = 'Genre: '.ucwords(str_replace('-', ' ', $slug)) : $title = 'All Genres';

        return new Response($title);
    }


}