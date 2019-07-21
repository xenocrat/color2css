## What is this?

color2css is a PHP class for handling CSS color conversions.

## Requirements

* PHP 5.4+

## Usage

Define the CSS color `rebeccapurple` using various methods:

    $color2css = new color2css("rebeccapurple");
    $color2css = new color2css("#663399");
    $color2css = new color2css("rgb(102, 51, 153)");
    $color2css = new color2css("hsl(270, 50%, 40%)");
    $color2css = new color2css("rgba(102, 51, 153, 1.0)");
    $color2css = new color2css("hsla(270, 50%, 40%, 100%)");
    $color2css = new color2css(102, 51, 153);
    $color2css = new color2css(270, 0.5, 0.4);
    $color2css = new color2css(102, 51, 153, 1.0);
    $color2css = new color2css(270, 0.5, 0.4, 1.0);

Interpret a CSS color description:

    $color2css->rgb("rgb(102, 51, 153)");    // returns true
    $color2css->rgb("rgb(256, 257, 258)");   // returns false
    $color2css->hsl("hsl(270, 50%, 40%)");   // returns true
    $color2css->hsl("hsl(270, 133%, 140%)"); // returns false

Adjust the RGB values of a color:

    $color2css->r(255);
    $color2css->g(99);
    $color2css->b(71);

Adjust the HSL values of a color:

    $color2css->h(9);
    $color2css->s(1.0);
    $color2css->l(0.64);

Adjust the alpha value of a color:

    $color2css->a(0.5);

Export a CSS color definition:

    $color2css->hex();
    $color2css->rgb();
    $color2css->hsl();
    $color2css->hexa();
    $color2css->rgba();
    $color2css->hsla();
