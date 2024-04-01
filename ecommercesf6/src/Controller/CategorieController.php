<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/categorie', name: 'categorie_')]
class CategorieController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function list(Categorie $categorie): Response
    {
        return $this->render('categorie/list.html.twig', compact('categorie'));
    }
}
