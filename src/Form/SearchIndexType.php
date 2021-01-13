<?php


namespace App\Form;

use App\Entity\Departure;
use App\Entity\Arrival;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchIndexType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) : void
    {

        $builder
            ->add('departure', TextType::class)
            ->add('arrival', TextType::class)
            ->add('date', DateType::class)
            ->add('travel', SubmitType::class, ['label' => 'Travel'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Departure::class,
                            Arrival::class
        ]);
    }
}