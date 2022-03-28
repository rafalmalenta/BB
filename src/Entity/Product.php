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

    /** @return array<string> */
    public static function getColors(): array
    {
        return self::COLORS;
    }

    public function __construct()
    {
        parent::__construct();
    }
}
