<?php

namespace App\Controller;

use App\Entity\Agents;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RosterController extends AbstractController
{
    /**
     * @Route("/roster", name="roster")
     */
    public function index(): Response
    {
        $agents = $this->getDoctrine()->getRepository(Agents::class)->findAll();

        return $this->render('roster/index.html.twig', array('agents' => $agents));
    }
}
