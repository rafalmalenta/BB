<?php

declare(strict_types=1);

namespace App\Tests\Behat\Contexts;

use App\Entity\Product;
use Behat\Behat\Context\Context;
use Behat\MinkExtension\Context\MinkContext;
use Doctrine\ORM\EntityManagerInterface;

require_once __DIR__.'/../../../vendor/phpunit/phpunit/src/Framework/Assert/Functions.php';

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
    public function thereIsProductWithSlugAndColor($slug, $color):void
    {

        $product = new Product();
        $product->setCurrentLocale("en-US");
        $product->setCode("so");
        $product->setName("sda");
        $product->setSlug($slug);
        $product->setColor($color);

        $this->entityManager->persist($product);
        $this->entityManager->flush();
    }
    /**
     * @Then I should see select menu with option :color
     */
    public function iShouldSeeSelectMenuWithOption($color):void
    {
        $page = $this->getSession()->getPage();
        $selectMenu = $page->find('css','#sylius_product_color');
//        var_dump($selectMenu->find('named',['option',"Red"])->getText());
        assertNotEmpty($selectMenu->find('named',['option',"$color"])->getText(), "there is no such option");
//        var_dump(substr($selectMenu->getHtml(),0,1150));
//        assertNotEmpty($selectMenu);

    }





}
