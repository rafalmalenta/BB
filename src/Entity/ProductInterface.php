<?php

declare(strict_types=1);

namespace App\Entity;

use Sylius\Component\Core\Model\ProductInterface as baseInterface;

interface ProductInterface extends baseInterface
{
    public const COLORS = [
        'Red',
        'Green',
        'Blue',
    ];

    /** @return array<string> */
    public static function getColors(): array;

    public function getColor(): ?string;

    public function setColor(?string $color): void;
}
