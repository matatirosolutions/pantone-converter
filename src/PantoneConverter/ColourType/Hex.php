<?php

declare(strict_types=1);

namespace MSDev\PantoneConverter\ColourType;

class Hex
{
    /** @var string */
    protected $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
