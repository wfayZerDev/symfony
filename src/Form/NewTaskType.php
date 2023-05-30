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


class NewTaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('content')
            ->add('completed_at', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'js-datepicker'],
            ])
            ->add('owner_id', entityType::class, [
                'class' => User::class, 
                'choice_label' => 'FullName',
                'multiple' => false,])
            ->add('status_id', EntityType::class, [
                'class' => Status::class, 
                'choice_label' => 'label', ])
            ->add('user_id', EntityType::class, [
                'class' => User::class, 
                'choice_label' => 'fullName', 
                'multiple' => true,]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Task::class,
        ]);
    }
}
