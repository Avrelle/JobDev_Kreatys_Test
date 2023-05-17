<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Mission;
use App\Form\MissionType;
use App\Repository\MissionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Id;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MissionController extends AbstractController
{
    #[Route('/mission', name: 'app_mission')]
    public function NewMission (Request $request,EntityManagerInterface $entityManager): Response
    {
       
        $client = $this->getUser();
        $mission = new Mission;
        $mission->setClient($client);
        

        $form = $this->createForm(MissionType::class, $mission);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() ) {
            $entityManager->persist($mission);
            $entityManager->flush();

            return $this->redirectToRoute('app_home');
        }
        
        return $this->render('mission/index.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
