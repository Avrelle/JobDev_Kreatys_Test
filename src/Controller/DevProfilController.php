<?php

namespace App\Controller;

use App\Form\RegistrationDevFormType;
use App\Repository\DeveloperRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DevProfilController extends AbstractController
{
    #[Route('/dev/profil', name: 'app_dev_profil')]
    public function index(DeveloperRepository $developerRepository): Response
    {
        $devProfils = $developerRepository->findAll();
        

        return $this->render('dev_profil/index.html.twig', [
            'controller_name' => 'DevProfilController',
            'devProfils' => $devProfils
        ]);
    }
}
