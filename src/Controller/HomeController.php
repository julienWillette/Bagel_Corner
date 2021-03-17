<?php

namespace App\Controller;

use App\Entity\News;
use App\Entity\Bagels;
use App\Entity\Company;
use App\Repository\NewsRepository;
use App\Repository\BagelsRepository;
use App\Repository\CompanyRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(BagelsRepository $bagels, NewsRepository $news, CompanyRepository $company): Response
    {
        $bagels = $this->getDoctrine()
        ->getRepository(Bagels::class)
        ->findAll();
        $news = $this->getDoctrine()
        ->getRepository(News::class)
        ->findAll();
        $company = $this->getDoctrine()
        ->getRepository(Company::class)
        ->findAll();
        
        return $this->render('home/index.html.twig', [
            'bagels' => $bagels,
            'news' => $news,
            'company' => $company
        ]);
    }
}
