<?php

declare(strict_types=1);

namespace App\Form\Extension;

use Sylius\Bundle\ProductBundle\Form\Type\ProductType;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\ChoiceList\Loader\CallbackChoiceLoader;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use App\Entity\Product;


class ProductTypeExtension extends AbstractTypeExtension
{
    /**
     * @param array<string, mixed> $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options ): void
    {
        $builder->add("color", ChoiceType::class, [
            'placeholder'=> "pick color",
            'choice_loader' => new CallbackChoiceLoader(function() {
                return Product::getColors();
            }),
            'choice_label' => function ($value) {
                return $value;
            },
            'translation_domain'=>'colors',
        ],
        );
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
