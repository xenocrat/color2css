## What is this?

color2css is a PHP class for CSS color interpreting and conversion.

## Requirements

* PHP 8.0+

## Usage

Define the CSS color `rebeccapurple` using various methods:

    $color2css = new \xenocrat\color2css("rebeccapurple");
    $color2css = new \xenocrat\color2css("#663399");
    $color2css = new \xenocrat\color2css("rgb(102, 51, 153)");
    $color2css = new \xenocrat\color2css("rgba(102, 51, 153, 1.0)");
    $color2css = new \xenocrat\color2css("hsl(270, 50%, 40%)");
    $color2css = new \xenocrat\color2css("hsla(270, 50%, 40%, 100%)");
    $color2css = new \xenocrat\color2css("hwb(270 20% 40% / 1)");
    $color2css = new \xenocrat\color2css(0.4, 0.2, 0.6, 1.0);

Interpret a CSS color definition:

    $color2css->hex("#663399");              // returns true
    $color2css->hex("#6633GG");              // returns false
    $color2css->rgb("rgb(102, 51, 153)");    // returns true
    $color2css->rgb("rgb(256, 51, 153)");    // returns false
    $color2css->rgb("rgb(40%, 20%, 60%)");   // returns true
    $color2css->rgb("rgb(0.4, 0.2, 0.6)");   // returns false
    $color2css->hsl("hsl(270, 50%, 40%)");   // returns true
    $color2css->hsl("hsl(270, 200%, 3%)");   // returns false
    $color2css->hwb("hwb(480 20% 40% / 1)")  // returns true
    $color2css->hwb("hwb(270 200% 4% / 1)")  // returns false
    $color2css->keyword("rebeccapurple");    // returns true
    $color2css->keyword("undefinedcolor");   // returns false

Adjust the RGB values of a color:

    $color2css->red(255);
    $color2css->green(99);
    $color2css->blue(71);

Adjust the HSL values of a color:

    $color2css->hue(9);
    $color2css->saturation(1.0);
    $color2css->lightness(0.64);

Adjust the whiteness and blackness of a color:

    $color2css->whiteness(0.28);
    $color2css->blackness(0);

Adjust the alpha value of a color:

    $color2css->alpha(0.5);

Export a CSS color definition:

    $color2css->hex();  // returns "#ff6347"
    $color2css->hexa(); // returns "#ff634780"
    $color2css->rgb();  // returns "rgb(255, 99, 71, 0.50)"
    $color2css->hsl();  // returns "hsl(9, 100%, 64%, 0.50)"
    $color2css->hwb();  // returns "hwb(9 28% 0% / 1)"
