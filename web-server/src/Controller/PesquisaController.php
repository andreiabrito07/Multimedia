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
        
        $q = (string)$request->query->get('q');
        $records = $entityManager->getRepository(Media::class)->findAll();
        
        $matches = array_filter($records, function($var) use ($q) { return 
        preg_match("/\b$q/i", $var->getTitulo()); });

        return $this->render('pesquisa/index.html.twig', ['result' => $matches,]);
    }
}
