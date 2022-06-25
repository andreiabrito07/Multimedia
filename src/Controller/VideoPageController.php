<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VideoPageController extends AbstractController
{
    public function index(string $slug): Response
    {
        return $this->render('video_page/index.html.twig', [
            'slug' => $slug,
        ]);
    }
}
