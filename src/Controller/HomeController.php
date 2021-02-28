<?php

namespace App\Controller;

use App\Entity\User;
use App\Security\LoginFormAuthenticator;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {   
        // only if you logged in
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}