<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Product as BaseProduct;

class Product extends BaseProduct implements ProductInterface
{
    private const RED = "Czerwony";
    private const GREEN = "Zielony";
    private const BlUE = "Niebieski";

    /* @var string[] $colors */
    public static array $colors = [
        self::RED,
        self::GREEN,
        self::BlUE,
    ];

    private ?string $color;


    public function getColor(): ?string
    {
        return $this->color;
    }
    /**
     * @return string[]
     */
    public static function getColors(): array
    {
        return self::$colors;
    }

    /**
     * @param string|null $color
     */
    public function setColor(?string $color): void
    {
        $this->color = $color;
    }

    public function __construct()
    {
        parent::__construct();
    }

}
