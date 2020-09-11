<?php

declare(strict_types=1);

namespace MSDev\PantoneConverter\ColourType;

class Pantone
{
    /** @var string */
    private $name;

    /** @var Hex */
    private $hex;

    /** @var RGB */
    private $rgb;

    /** @var CMYK */
    private $cmyk;

    public function __construct(string $name, Hex $hex, RGB $rgb, CMYK $cmyk)
    {
        $this->name = $name;
        $this->hex = $hex;
        $this->rgb = $rgb;
        $this->cmyk = $cmyk;
    }

    public function __toString(): string
    {
        return $this->name;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function hex(): Hex
    {
        return $this->hex;
    }

    public function rgb(): RGB
    {
        return $this->rgb;
    }

    public function cmyk(): CMYK
    {
        return $this->cmyk;
    }
}
