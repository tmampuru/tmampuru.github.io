<?php

namespace App\Form;

use App\Entity\Comms;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Assessor', ChoiceType::class, [
                'label' => 'QA Assessor',
                'attr' => ['class' => 'comms-input'],
                'choices'  => [
                    'Choose' => null,
                    'Tumelo' => 'Tumelo',
                    'Keenan' => 'Keenan',
                    'Thandiwe' => 'Thandiwe',
                    'Clayton' => 'Clayton',
                    'Reabetswe' => 'Reabetswe',
                    'Annalisa' => 'Annalisa',
                    'Sandisile' => 'Annalisa'
                ]
            ])
            ->add('AgentAddressed', TextType::class, [
                'label' => 'Who did you address?',
                'attr' => ['class' => 'comms-input']
            ])
            ->add('PodLeader', TextType::class, [
                'label' => 'Pod Leader',
                'attr' => ['class' => 'comms-input']
            ])
            ->add('SupportCategory', TextType::class, [
                'label' => 'Support Category',
                'attr' => ['class' => 'comms-input']
            ])
            ->add('IssueCategory', TextType::class, [
                'label' => 'Description of the query',
                'attr' => ['class' => 'comms-input']
            ])
            ->add('InteractionID', TextType::class, [
                'label' => 'Incoming number / Outbound number, Ticket ID',
                'attr' => ['class' => 'comms-input']
            ])
            ->add('CommentsSent', TextType::class, [
                'label' => 'Paste the communication below',
                'attr' => ['class' => 'comms-input']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Comms::class,
        ]);
    }
}
