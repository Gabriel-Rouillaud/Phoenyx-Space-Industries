<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('password')
            ->add('name')
            ->add('firstname')
            ->add('birthdate')
            ->add('adress')
            ->add('genre')
            ->add('phone')
            ->add('country')
            ->add('zip_code')
            ->add('roles')
            ->add('isVerified')
            ->add('ticket')
            ->add('card')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
