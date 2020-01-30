<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('photo', UrlType::class, [
                'label' => 'Photo (url)',
                'default_protocol' => 'https',
                'required' => true,
                'attr' => [
                    'pattern' => '^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?
                    [a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$'
                ]
            ])
            ->add('description')
            ->add('firstDay')
            ->add('lastDay')
            ->add('performers')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
