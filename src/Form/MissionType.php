<?php

namespace App\Form;

use App\Entity\Mission;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MissionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('job')
            ->add('company')
            ->add('localization')
            ->add('contract', ChoiceType::class, [
                'choices' => [
                    'CDD' => 'CDD',
                    'CDI' => 'CDI'
                ]
            ])
            ->add('duration', ChoiceType::class, [
                'choices' => [
                    'temps plein' => 'temps plein',
                    'temps partiel' => 'temps partiel'
                ]
            ])
            ->add('salary')
            ->add('description')
            ->add('startDate')
            ->add('endDate')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Mission::class,
        ]);
    }
}
