<?php

declare(strict_types=1);

namespace App\Entity;

use Sylius\Component\Core\Model\ProductInterface as baseInterface;

interface ProductInterface extends baseInterface
{
    const RED = 'Czerwony';

    const GREEN = 'Zielony';

    const BlUE = 'Niebieski';

    const COLORS = [
        self::RED,
        self::GREEN,
        self::BlUE,
    ];

    public function getColor(): ?string;

    public function setColor(?string $color): void;
}
