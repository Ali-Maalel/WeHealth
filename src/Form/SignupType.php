<?php

namespace App\Form;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SignupType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('login')
            ->add('password')
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('telephone')
            ->add("typeuser",ChoiceType::class,array(
                'label' => "je veux m'inscrire parce que je suis ...",
                'choices' => array(
                    'Professionel Sante'=>'Professionel Sante',
                    'Coach'=>'Coach',
                    'Patient'=>'Patient',
                    "Proche d'un patient"=>"Proche d'un patient",
                )))
            ->add('SignUp',SubmitType::class);
                }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,]);
    }
}
