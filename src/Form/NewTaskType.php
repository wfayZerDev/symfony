<?php

namespace App\Form;

use App\Entity\Task;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Status;
use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;


class NewTaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('content')
            ->add('picture')
            // Add owner_id auto fill
            ->add('owner_id', EntityType::class, [
                'class' => User::class, 
                'choice_label' => 'firstName', 
                'disabled' => true, ])
                // add status_id picklist
            ->add('status_id', EntityType::class, [
                'class' => Status::class, 
                'choice_label' => 'label',
                'disabled' => true, ])
                // add etat objet picklist
                ->add('etat_objet', ChoiceType::class, [
                    'choices' => [
                        'Bon état' => 'Bon état',
                        'Moyen état' => 'Moyen état',
                        'Mauvais état' => 'Mauvais état',
                    ],
                ])
                ->add('Region', ChoiceType::class, [
                    'choices' => [
                        'Auvergne-Rhône-Alpes' => 'Auvergne-Rhône-Alpes',
                        'Bourgogne-Franche-Comté' => 'Bourgogne-Franche-Comté',
                        'Bretagne' => 'Bretagne',
                        'Centre-Val de Loire' => 'Centre-Val de Loire',
                        'Corse' => 'Corse',
                        'Grand Est' => 'Grand Est',
                        'Hauts-de-France' => 'Hauts-de-France',
                        'Île-de-France' => 'Île-de-France',
                        'Normandie' => 'Normandie',
                        'Nouvelle-Aquitaine' => 'Nouvelle-Aquitaine',
                        'Occitanie' => 'Occitanie',
                        'Pays de la Loire' => 'Pays de la Loire',
                        'Provence-Alpes-Côte d\'Azur' => 'Provence-Alpes-Côte d\'Azur',
                    ],
                ]);


    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Task::class,
        ]);
    }
}
