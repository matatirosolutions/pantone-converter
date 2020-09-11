<?php

declare(strict_types=1);

namespace MSDev\PantoneConverter;

use MSDev\PantoneConverter\ColourType\CMYK;
use MSDev\PantoneConverter\ColourType\Hex;
use MSDev\PantoneConverter\ColourType\Pantone;
use MSDev\PantoneConverter\ColourType\RGB;
use MSDev\PantoneConverter\Exception\ColourNotFound;

final class PantoneConverter
{
    public static function ColourFromName(string $colourName): Pantone
    {
        $colourKey = strtolower(
            str_replace(' ', '-', $colourName)
        );
        if (array_key_exists($colourKey, PantoneColourMap::COLOUR_MAP)) {
            $colour = PantoneColourMap::COLOUR_MAP[$colourKey];

            return new Pantone(
                $colour['name'],
                new Hex($colour['hex']),
                new RGB($colour['r'], $colour['g'], $colour['b']),
                new CMYK($colour['c'], $colour['m'], $colour['y'], $colour['k'])
            );
        }

        throw new ColourNotFound(sprintf('Unable to locate colour %s. Are you sure this is a valid Pantone Coated colour name?', $colourName));
    }
}
