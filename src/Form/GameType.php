<?php

namespace App\Form;

use App\Entity\CoverText;
use App\Entity\DescriptionText;
use App\Entity\GameText;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GameType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder
			->add('title')
            ->add('text', TextareaType::class)
            ->add(
                'save', SubmitType::class, [
                'attr' => [
                'class' => 'btn btn-primary float-left button'
                ]
                ]
            );
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
            'data_class' => GameText::class,
            ]
        );
    }
}