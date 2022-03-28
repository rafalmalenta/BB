<?php

declare(strict_types=1);

namespace App\Entity;

use Sylius\Component\Core\Model\ProductInterface as baseInterface;

interface ProductInterface extends baseInterface
{
//    const RED = 'Red';
//    const GREEN = ''Green';
//    const BlUE = 'Blue';

    const COLORS = [
        'Red',
        'Green',
        'Blue',
    ];

    public function getColor(): ?string;

    public function setColor(?string $color): void;
}
