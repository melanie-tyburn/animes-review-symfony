<?php

namespace App\Form;

use App\Entity\Anime;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class AnimeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('genre', ChoiceType::class, [
                'choices' => [
                    'Action' => 'Action',
                    'Comédie' => 'Comédie',
                    'Drame' => 'Drame',
                    'Horreur' => 'Horreur',
                    'Autre' => 'Autre',
                ],
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Shojo' => 'Shojo',
                    'Shonen' => 'Shonen',
                    'Seinen' => 'Seinen',
                    'Josei' => 'Josei',
                    'Autre' => 'Autre',
                ],
            ])
            ->add('notation', ChoiceType::class, [
                'choices' => [
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                ],
            ])
            ->add('commentaires')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Anime::class,
        ]);
    }
}
