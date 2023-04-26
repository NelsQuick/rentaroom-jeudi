<?php

namespace App\Controller;

use App\Repository\NoteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home', methods:['GET'])]
    public function index(NoteRepository $note): Response
    {
        return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController',
            'note' => $note->findAll()
        ]);
    }
}
