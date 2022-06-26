<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Media;

class VideoPageController extends AbstractController
{
    public function index(string $slug, ManagerRegistry $doctrine): Response
    {
        $media = $doctrine->getRepository(Media::class)->find($slug);

        if (!$media) {
            throw $this->createNotFoundException(
                'No media found for id '. $slug
            );
        }

        return $this->render('video_page/index.html.twig', [
            'slug' => $slug,
            'media' => $media,
        ]);
    }
}
