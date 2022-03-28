<?php

declare(strict_types=1);

namespace App\Entity;

use Sylius\Component\Core\Model\Product as BaseProduct;

class Product extends BaseProduct implements ProductInterface
{
    protected ?string $color;

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): void
    {
        $this->color = $color;
    }

    public function __construct()
    {
        parent::__construct();
    }
}
