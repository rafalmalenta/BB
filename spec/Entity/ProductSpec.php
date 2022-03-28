<?php

namespace spec\App\Entity;

use App\Entity\Product;
use PhpSpec\ObjectBehavior;

final class ProductSpec extends ObjectBehavior
{
    function it_is_correct_type():void
    {
        $this->shouldHaveType(Product::class);
    }
    function it_should_have_RGB_colors(): void
    {
        $this->getColors()->shouldContain("Red");
        $this->getColors()->shouldContain("Green");
        $this->getColors()->shouldContain("Blue");
    }
    function it_should_allow_set_colors(): void
    {
        $this->setColor("Red");
        $this->getColor()->shouldBe("Red");
    }
}
