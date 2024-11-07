<?php

namespace App\Form;

use App\Entity\Expenses;
use App\Entity\Trips;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExpensesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('expenseType',    null, [
                'label' => 'expense_type',
            ])
            ->add('TotalAmount', null, [
                'label' => 'total_amount',
            ])
            ->add('trips', EntityType::class,
                [
                    'label' => 'trips',
                'class' => Trips::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Expenses::class,
        ]);
    }
}
