<?php

namespace App\Controller;

use App\Repository\ClubRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DevController extends AbstractController
{
    #[Route('/dev', name: 'app_dev')]
    public function index(ClubRepository $repo): Response
    {
        $a = $repo->find(2);
        dd($a);
        return $this->render('dev/index.html.twig', [
            'controller_name' => 'DevController',
        ]);
    }
}
