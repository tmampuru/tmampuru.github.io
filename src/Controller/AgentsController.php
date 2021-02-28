<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgentsController extends AbstractController
{
    /**
     * @Route("/agents", name="agents")
     */
    public function index(): Response
    {
        return $this->render('agents/index.html.twig', [
            'controller_name' => 'AgentsController',
        ]);
    }
}
