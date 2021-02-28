<?php

namespace App\Controller;

use App\Entity\Agents;
use App\Entity\QaCalls;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;


class FormsController extends AbstractController
{

    /**
     * @Route("/forms", name="forms")
     * Method({"GET", "POST"})
     */
    public function new(Request $request, MailerInterface $mailer)
    {
        $agents = $this->getDoctrine()->getRepository(Agents::class)->findAll();
        $qacall = new QaCalls();

        $form = $this->createFormBuilder($qacall)
            ->add('agentName', EntityType::class, [
                'class' => Agents::class,
                'choice_label' => 'agentName',
            ])
            ->add('agentEmail', EntityType::class, [
                'class' => Agents::class,
                'choice_label' => 'agentEmail',
            ])
            ->add('appropriateIntro', TextType::class)
            ->add('apologyEmpathy', TextType::class)
            ->add('identifiedMojo', TextType::class)
            ->add('deadAir', TextType::class)
            ->add('commentsAdvice1', TextType::class)
            ->add('probing', TextType::class)
            ->add('proactivelyTroubleshoot', TextType::class)
            ->add('stepsAppropriate', TextType::class)
            ->add('situationImproved', TextType::class)
            ->add('commentsAdvice2', TextType::class)
            ->add('agentNotes', TextType::class)
            ->add('endCallPolitely', TextType::class)
            ->add('remainedProfessional', TextType::class)
            ->add('commentsAdvice3', TextType::class)
            ->add('mojoLink', TextType::class)
            ->add('callDate', TextType::class)
            ->add('incomingOutgoingNumber', TextType::class)
            ->add('serviceArea', TextType::class)
            ->add('queryBased', TextType::class)
            ->add('assessor', TextType::class)
            ->add('submit', SubmitType::class, ['label' => 'Submit'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $qacall = $form->getData();
            $qacall->setSubmissionTime(date("m-d-Y H:i:s"));
            $email = (new TemplatedEmail())
                    ->from(new Address('admin@tmampuru.co.za', 'Keenan QA'))
                    ->to($qacall->getAgentEmail())
                    ->subject('You just been vetted')
                    ->htmlTemplate('forms/call_assessment.html.twig')
                    
                    ->context([
                        'qacall' => $qacall,
                    ])
                ;
                try {
                    $mailer->send($email);
                } catch (TransportExceptionInterface $e) {
                    // some error prevented the email sending; display an
                    // error message or try to resend the message
                }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($qacall);
            $entityManager->flush();

            return $this->redirectToRoute('forms');
        }

        return $this->render('forms/index.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
