## What is this?

color2css is a PHP class for CSS color interpreting and conversion.

## Requirements

* PHP 8.0+

## Usage

Define the CSS color `rebeccapurple` using various methods:

    use xenocrat\color2css;
    $color2css = new color2css("rebeccapurple");
    $color2css = new color2css("#663399");
    $color2css = new color2css("rgb(102, 51, 153)");
    $color2css = new color2css("rgba(102 51 153 / 1.0)");
    $color2css = new color2css("hsl(270 50% 40% / 1.0)");
    $color2css = new color2css("hsla(270, 50%, 40%, 100%)");
    $color2css = new color2css("hwb(270 20% 40% / 1)");
    $color2css = new color2css("lab(32.9 42.9 -47.2)");
    $color2css = new color2css("lch(32.9 63.7 312.3 / 100%)");
    $color2css = new color2css(0.4, 0.2, 0.6, 1.0);

Interpret a CSS color definition, with clamping for out-of-range values:

    $color2css->hex("#6633GG");             // returns false
    $color2css->hex("#663399");             // returns true
    $color2css->rgb("rgb(102, 51, 153)");   // returns true
    $color2css->rgb("rgb(256, 51, 153)");   // returns true
    $color2css->rgb("rgb(40%, 20%, 60%)");  // returns true
    $color2css->rgb("rgb(0.4, 0.2, 0.6)");  // returns true
    $color2css->hsl("hsl(270, 50%, 40%)");  // returns true
    $color2css->hsl("hsl(270, 200%, 3%)");  // returns true
    $color2css->hwb("hwb(480 20% 40% / 1)") // returns true
    $color2css->hwb("hwb(270 200% 4% / 1)") // returns true
    $color2css->hwb("hwb(90, 100%, 4%, 1)") // returns false
    $color2css->keyword("rebeccapurple");   // returns true
    $color2css->keyword("undefinedcolor");  // returns false

Adjust the RGB of a color, in the range 0-1:

    $color2css->red(1.0);
    $color2css->green(0.388);
    $color2css->blue(0.278);

Adjust the hue of a color, in the range 0-360:

    $color2css->hue(9);

Adjust the saturation and lightness of a color, in the range 0-1:

    $color2css->saturation(1.0);
    $color2css->lightness(0.64);

Adjust the whiteness and blackness of a color, in the range 0-1:

    $color2css->whiteness(0.28);
    $color2css->blackness(0);

Adjust the CIE lightness of a color, in the range 0-100:

    $color2css->cie_l(0);

Adjust the CIE Lab A and B axes of a color:

    $color2css->cie_a(0.5);
    $color2css->cie_b(0.7);

Adjust the CIE LCH chroma of a color, with a value > 0:

    $color2css->cie_c(160);

Adjust the CIE LCH hue value of a color, in the range 0-360:

    $color2css->cie_h(95);

Adjust the alpha value of a color:

    $color2css->alpha(0.5);
    $color2css->alpha(1.0);

Export a CSS color definition:

    $color2ccc->keyword("tomato");
    $color2css->hex();                      // returns "#ff6347"
    $color2css->hexa();                     // returns "#ff6347ff"
    $color2css->rgb();                      // returns "rgb(255 99 71 / 100%)"
    $color2css->hsl();                      // returns "hsl(9.1 100% 63.9% / 100%)"
    $color2css->hwb();                      // returns "hwb(9.1 27.9% 0% / 100%)"
    $color2css->lab();                      // returns "lab(62.2 57.9 46.4 / 100%)"
    $color2css->lch();                      // returns "lch(62.2 74.2 38.7 / 100%)"
    $color2css->keyword();                  // returns "tomato";

Calculate WCAG contrast ratio as a float value between 1 and 21:

    $color1 = new color2css("white");
    $color2 = new color2css("black");
    $contrast = color2css::contrast($color1, $color2);
