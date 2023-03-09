<?php

namespace App\Form;

use App\Entity\Ordenance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrdenanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('description')
            ->add('created_at')
            ->add('name_profSante')
            ->add('adresse')
            ->add('profSante')
            ->add('patient')
            ->add('patient_user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ordenance::class,
        ]);
    }
}
