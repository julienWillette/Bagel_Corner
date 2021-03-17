<?php

namespace App\Controller;

use App\Repository\BagelsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(BagelsRepository $bagelsRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'bagels' => $bagelsRepository->findAll(),
        ]);
    }
}
