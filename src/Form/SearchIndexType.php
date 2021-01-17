<?php


namespace App\Form;

use App\Entity\Departure;
use App\Entity\Arrival;
use App\Entity\Destination;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchIndexType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) : void
    {

        $builder
            ->add('departure', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a departure'
                    ])
                ]
            ])
            ->add('arrival', TextType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Departure::class,
                            Arrival::class,
                            Destination::class
        ]);
    }
}