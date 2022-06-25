<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VideoUploadController extends AbstractController
{
    /**
     * @Route("/video/upload", name="app_video_upload")
     */
    public function index(): Response
    {
        return $this->render('video_upload/index.html.twig', [
            'controller_name' => 'VideoUploadController',
        ]);
    }
}
