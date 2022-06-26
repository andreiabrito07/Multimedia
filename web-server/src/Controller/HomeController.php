<?php

namespace App\Controller;

use App\Entity\Media;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class HomeController extends AbstractController
{
   
    public function index(EntityManagerInterface $entityManager): Response
    {

        $records = $entityManager->getRepository(Media::class)->findAll();
        return $this->render('home/index.html.twig', ['records' => $records]);
    }
}
