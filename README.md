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

Interpret a CSS color definition:

    $color2css->hex("#663399");              // returns true
    $color2css->hex("#6633GG");              // returns false
    $color2css->rgb("rgb(102, 51, 153)");    // returns true
    $color2css->rgb("rgb(256, 257, 258)");   // returns false
    $color2css->hsl("hsl(270, 50%, 40%)");   // returns true
    $color2css->hsl("hsl(270, 200%, 300%)"); // returns false

Adjust the RGB values of a color:

    $color2css->red(255);
    $color2css->green(99);
    $color2css->blue(71);

Adjust the HSL values of a color:

    $color2css->hue(9);
    $color2css->saturation(1.0);
    $color2css->lightness(0.64);

Adjust the alpha value of a color:

    $color2css->alpha(0.5);

Export a CSS color definition:

    $color2css->hex();  // returns "#ff6347"
    $color2css->rgb();  // returns "rgb(255, 99, 71)"
    $color2css->hsl();  // returns "hsl(9, 100%, 64%)"
    $color2css->hexa(); // returns "#ff634780"
    $color2css->rgba(); // returns "rgba(255, 99, 71, 0.50)"
    $color2css->hsla(); // returns "hsla(9, 100%, 64%, 0.50)"
