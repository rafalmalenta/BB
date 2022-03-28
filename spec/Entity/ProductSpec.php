<?php

namespace spec\App\Entity;

use App\Entity\Product;
use App\Entity\ProductInterface;
use PhpSpec\ObjectBehavior;

final class ProductSpec extends ObjectBehavior
{
    function it_is_correct_type():void
    {
        $this->shouldHaveType(Product::class);
    }
    function it_should_have_RGB_colors(): void
    {
        self::getColors()->shouldContain("Red");
        self::getColors()->shouldContain("Green");
        self::getColors()->shouldContain("Blue");
    }
}
