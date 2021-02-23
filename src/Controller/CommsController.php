<?php

namespace App\Controller;

use App\Entity\Comms;
use App\Form\CommsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommsController extends AbstractController
{
    /**
     * @Route("/comms", name="comms")
     */
    public function new(): Response
    {   
        $comms = new Comms();

        $form = $this->createForm(CommsType::class, $comms);
        return $this->render('comms/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
