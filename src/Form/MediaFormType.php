<?php

namespace App\Form;

use App\Entity\Media;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MediaFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titulo', TextType::class, array('attr' => array(
                'class' => 'form-control',
                'placeholder' => 'Contrary to popular belief, Lorem Ipsum (2019) is not.',
                'id' => 'e1',
            )))
            ->add('sobre', TextareaType::class, array('attr' => array(
                'class' => 'form-control',
                'placeholder' => 'Descrição',
                'id' => 'e2',
                'rows' => '3',
                'required' => false,
            )))
            ->add('mediaFile', FileType::class, [
                'mapped' => false,
                'attr' => array(
                    'class' => 'btn btn-primary btn-lg border-none',
                )
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Media::class,
        ]);
    }
}
