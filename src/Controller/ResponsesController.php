<?php

namespace App\Controller;

use App\Entity\QaCalls;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ResponsesController extends AbstractController
{
    /**
     * @Route("/responses", name="responses")
     */
    public function index(): Response
    {
        $qacalls = $this->getDoctrine()->getRepository(QaCalls::class)->findAll();

        return $this->render('responses/index.html.twig', array('qacalls' => $qacalls));
    }
}
