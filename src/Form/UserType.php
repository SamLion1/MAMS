<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email' , null, [
                    'label' => 'Email'])
            //->add('roles')
            ->add('password', null, [
                'label' => 'Mot de Passe'
            ] )
            ->add('lastname'    , null, [
                'label' => 'Nom'
            ])
            ->add('firstname'       , null, [
                'label' => 'Prénom'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
