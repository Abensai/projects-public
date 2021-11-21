<?php

namespace App\Controller;

use App\Repository\AgentRepository;
use App\Repository\MissionRepository;
use App\Repository\StatusRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @param MissionRepository $missionRepository
     * @param AgentRepository $agentRepository
     * @param StatusRepository $statusRepository
     * @return Response
     */
    public function index(MissionRepository $missionRepository, AgentRepository $agentRepository, StatusRepository $statusRepository): Response
    {
        return $this->render('index/index.html.twig', [
            'mission' => $missionRepository->findAll(),
            'agent'   => $agentRepository->findAll(),
            'status' => $statusRepository->findAll(),
        ]);
    }
}
