<?php

declare(strict_types=1);

namespace App\Form\Extension;


use Sylius\Bundle\ProductBundle\Form\Type\ProductType;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use App\Entity\Product;

class ProductTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add("color", ChoiceType::class, [
            'placeholder'=> "pick color",
            'choices'=>Product::getColors(),
            'choice_label' => function ($value) {
                return strtoupper($value);
            },

        ],
        )
        ;
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
