<?php

namespace App\Controller;

use App\Repository\MissionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OfferController extends AbstractController
{
    #[Route('/offer', name: 'app_offer')]
    public function index(MissionRepository $missionRepository): Response
    {

        $missions = $missionRepository->findAll();


        return $this->render('offer/index.html.twig', [
            'controller_name' => 'OfferController',
            'missions' => $missions,
        ]);
    }
}
