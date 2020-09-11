<?php

use PHPUnit\Framework\TestCase;
use MSDev\PantoneConverter\PantoneConverter;
use MSDev\PantoneConverter\Exception\ColourNotFound;

final class PantoneConverterTest extends TestCase
{
    public function testFindExistingColourByNumber(): void
    {
        $colour = PantoneConverter::ColourFromName('7555-c');

        self::assertEquals('7555 C', $colour);
        self::assertEquals('D29F13', $colour->hex());
        self::assertEquals(210, $colour->rgb()->red());
        self::assertEquals(91.0, $colour->cmyk()->yellow());
    }

    public function testFindExistingColourByName(): void
    {
        $colourName = 'Warm Red C';
        $colour = PantoneConverter::ColourFromName($colourName);

        self::assertEquals($colourName, $colour);
        self::assertEquals('F9423A', $colour->hex());
        self::assertEquals(249, $colour->rgb()->red());
        self::assertEquals(77.0, $colour->cmyk()->yellow());
    }

    public function testFindNonExistentColour(): void
    {
        $this->expectException(ColourNotFound::class);
        PantoneConverter::ColourFromName('Foo Bah');
    }
}
