<?php

namespace App\Controller;

use App\Entity\Media;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class PesquisaController extends AbstractController
{
    /**
     * @Route("/pesquisa", name="pesquisa")
     */
    public function index(EntityManagerInterface $entityManager, Request $request): Response
    {
        
        $q = $request->query->get('q');
        $records = $entityManager->getRepository(Media::class)->findAll();
        
        dump($records);
        return $this->render('pesquisa/index.html.twig', ['records' => $records,]);
    }
}
