<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main')]
    public function index(CategorieRepository $categorieRepository): Response
    {
        return $this->render('main/index.html.twig', ['categorie'=>$categorieRepository->findBy([], ['categorieOrder' => 'asc'])]);
    }
}
