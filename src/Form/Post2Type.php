<?php

namespace App\Form;

use App\Entity\Post;
use App\Entity\Topic;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Post2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('last_at')
            ->add('created_at')
            ->add('content')
            ->add('titre')
            ->add('auteur')
            ->add('liste_commentaire')
            ->add('topic', EntityType::class, [
                'mapped' => true,
                'class' => Topic::class,
                'choice_label' => 'libelle',
                'placeholder' => 'select topic'
                
            ])
            ->add('save',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
