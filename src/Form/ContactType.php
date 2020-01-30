<?php

namespace App\Form;

use App\Entity\Contact;
use App\Entity\Status;
use App\Entity\Theme;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('message')
            ->add('time') // TODO date du jour ??
            ->add('user') // TODO user connecté ??
            ->add('theme', EntityType::class, [
                'class' => Theme::class,
                'choice_label' => 'name'
            ])
            ->add('status', EntityType::class, [
                'class' => Status::class,
                'choice_label' => 'name'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
