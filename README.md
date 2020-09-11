# Pantone Converter

Convert a PANTONE&reg; Coated colour to Hex, RGB or CMYK.

## Installation

````bash
composer require matatirosoln/pantone-converter
````
## Usage
````php
use MSDev\PantoneConverter\PantoneConverter;

$colour = PantoneConverter::ColourFromName('100-C');

print $colour->hex(); // outputs F6EB61

$rgb = $colour->rgb(); // RGB object
print $rgb->green(); // outputs 246

print $colour->cmyk()->magenta(); //outputs 4.0 
````


## License
Copyright &copy; 2020, Matatiro Solutions. Licensed under the [MIT License](LICENSE.md).

## Notes
 - PANTONE&reg; is a registered trademark of [Pantone Inc](https://www.pantone.com/).
 - Conversion of Pantone to Hex from [Code Beautify](https://codebeautify.org/pantone-to-hex-converter)
 - Conversion from Hex to RGB using PHP `sscanf()`
 - Conversion from RGB to CMYK based on [this Stackoverflow answer](https://stackoverflow.com/a/52156593)