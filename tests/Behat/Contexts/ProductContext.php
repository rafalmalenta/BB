<?php

declare(strict_types=1);

namespace App\Tests\Behat\Contexts;

use App\Entity\Product;
use Behat\Behat\Context\Context;
use Behat\MinkExtension\Context\MinkContext;
use Doctrine\ORM\EntityManagerInterface;
use Sylius\Component\Product\Factory\ProductFactoryInterface;


class ProductContext extends MinkContext implements Context
{

    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {

        $this->entityManager = $entityManager;
    }
    /**
     * @Given There is product with slug :slug and color :color
     */
    public function thereIsProductWithSlugAndColor($slug, $color)
    {

        $product = new Product();
        $product->setSlug($slug);
        $product->setColor($color);
        $this->entityManager->persist($product);
        $this->entityManager->flush();
    }



}
