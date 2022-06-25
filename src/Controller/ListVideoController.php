<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListVideoController extends AbstractController
{
    /**
     * @Route("/list/video", name="app_list_video")
     */
    public function index(): Response
    {
        return $this->render('list_video/index.html.twig', [
            'controller_name' => 'ListVideoController',
        ]);
    }
}
