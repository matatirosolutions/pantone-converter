<?php

declare(strict_types=1);

namespace MSDev\PantoneConverter\ColourType;

class CMYK
{
    /** @var float */
    private $cyan;

    /** @var float */
    private $magenta;

    /** @var float */
    private $yellow;

    /** @var float */
    private $black;

    public function __construct(float $cyan, float $magenta, float $yellow, float $black)
    {
        $this->cyan = $cyan;
        $this->magenta = $magenta;
        $this->yellow = $yellow;
        $this->black = $black;
    }

    public function cyan(): float
    {
        return $this->cyan;
    }

    public function magenta(): float
    {
        return $this->magenta;
    }

    public function yellow(): float
    {
        return $this->yellow;
    }

    public function black(): float
    {
        return $this->black;
    }

    public function asArray(): array
    {
        return [
            $this->cyan,
            $this->magenta,
            $this->yellow,
            $this->black,
        ];
    }
}
