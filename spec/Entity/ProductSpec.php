<?php

namespace spec\App\Entity;

use App\Entity\Product;
use PhpSpec\ObjectBehavior;

class ProductSpec extends ObjectBehavior
{
    function it_is_correct_type():void
    {
        $this->shouldHaveType(Product::class);
    }
    function it_should_have_RGB_colors():void
    {
        self::getColors()->shouldContain("Czerwony");
        self::getColors()->shouldContain("Zielony");
        self::getColors()->shouldContain("Niebieski");
    }
}
