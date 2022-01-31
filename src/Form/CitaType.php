<?php

namespace App\Form;

use App\Entity\Cita;
use App\Entity\Horario;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CitaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre')
            ->add('mail')
            ->add('telf', TextType::class, array('label' => 'Teléfono'))
            ->add('fecha')
            ->add('horario', EntityType::class, array(

                'class' => Horario::class,

                'choice_label' => 'nombre',
                
                'label' => 'Quiero solicitar mi cita por la ...'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cita::class,
        ]);
    }
}
