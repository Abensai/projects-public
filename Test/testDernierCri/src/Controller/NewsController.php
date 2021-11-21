<?php

namespace App\Controller;

use App\Service\NewsService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class NewsController extends AbstractController
{
    /**
     * @Route("/news", name="news")
     * @param NewsService $newsService
     * @return Response
     */
    public function index(NewsService $newsService): Response
    {
        // l'execution du flux d'import des actualités est fait via une commande
        // se controller a servie de test, laisser pour montrer le chaminemant du dev
        // $newsService->persistNews();

        return $this->render('news/index.html.twig', [
            'controller_name' => 'NewsController',
        ]);
    }
}
