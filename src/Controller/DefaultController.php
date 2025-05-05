<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function number(): Response
    {
        return $this->render('master/index.html.twig', [
           
        ]);
    }

    #[Route('/ebookReader/{name}', name: 'ebook_reader')]
    public function ebookReader(string $name): Response
    {
        return $this->render('master/ebook_reader.html.twig', [
           'name' => $name
        ]);
    }
}