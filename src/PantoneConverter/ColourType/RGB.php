<?php

declare(strict_types=1);

namespace MSDev\PantoneConverter\ColourType;

class RGB
{
    /** @var int */
    private $red;

    /** @var int */
    private $green;

    /** @var int */
    private $blue;

    public function __construct(int $red, int $green, int $blue)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }

    public function red(): int
    {
        return $this->red;
    }

    public function green(): int
    {
        return $this->green;
    }

    public function blue(): int
    {
        return $this->blue;
    }

    public function asArray(): array
    {
        return [
            $this->red,
            $this->green,
            $this->blue,
        ];
    }
}
