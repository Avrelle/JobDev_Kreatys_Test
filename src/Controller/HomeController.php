<?php

namespace App\Controller;

use App\Repository\ClientRepository;
use App\Repository\DeveloperRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(ClientRepository $clientRepository, DeveloperRepository $developerRepository): Response
    {   
        
        $client = $clientRepository-> findAll();
        $dev = $developerRepository->findAll();
        
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'clients' => $client,
            'devs' => $dev
        ]);
    }
}
