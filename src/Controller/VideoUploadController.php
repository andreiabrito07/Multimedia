<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Gedmo\Sluggable\Util\Urlizer;
use App\Entity\Media;
use App\Form\MediaFormType;

class VideoUploadController extends AbstractController
{
    /**
     * @Route("/video/upload", name="app_video_upload")
     */
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $media = new Media();
        $media->setPostDate(new \DateTime('today'));

        $form = $this->createForm(MediaFormType::class, $media);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['mediaFile']->getData();

            $destination = $this->getParameter('kernel.project_dir') . '/public/uploads';

            $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
            $newFilename = Urlizer::urlize($originalFilename) . '-' . uniqid() . '.' . $uploadedFile->guessExtension();

            $uploadedFile->move(
                $destination,
                $newFilename
            );

            $media->setMediaFileName($newFilename);

            $entityManager->persist($media);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('video_upload/index.html.twig', [
            'media_form' => $form->createView()
        ]);
    }
}
