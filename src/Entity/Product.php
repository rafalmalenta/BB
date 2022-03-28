<?php

declare(strict_types=1);

namespace App\Entity;

use Sylius\Component\Core\Model\Product as BaseProduct;

class Product extends BaseProduct implements ProductInterface
{
    protected const RED = 'Czerwony';

    protected const GREEN = 'Zielony';

    protected const BlUE = 'Niebieski';

    protected ?string $color;

    protected const COLORS = [
        self::RED,
        self::GREEN,
        self::BlUE,
    ];

    public function getColor(): ?string
    {
        return $this->color;
    }

    /** @return array<string> */
    public static function getColors(): array
    {
        return self::COLORS;
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
