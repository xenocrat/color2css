## What is this?

color2css is a PHP class for CSS color interpreting and conversion. In the sRGB color space it converts between RGB, HSL, HSV, HWB, hexidecimal, and CSS color keywords. In the CIE Lab color space it converts between Lab and LCH. In the OKlab color space it converts between Lab and LCH.

## Requirements

* PHP 8.0+

## Usage

Define a new empty color in the sRGB, CIE Lab, and OKlab color spaces:

    use xenocrat\color2css;
    $color2css = new color2css();

Define a new color by taking the properties of another instance:

    $color1 = new color2css("white");
    $color2 = new color2css($color1);

Adjust the alpha value of colors in the sRGB, CIE Lab, and OKlab color spaces:

    $color2css->alpha(0.5);
    $color2css->alpha(1.0);

All public non-static methods act as setters when supplied with a value, or getters when not supplied with a value.

### sRGB

Define the CSS color `rebeccapurple` in the sRGB color space using various methods:

    use xenocrat\color2css;
    $color2css = new color2css("rebeccapurple");
    $color2css = new color2css("#663399");
    $color2css = new color2css("rgb(102, 51, 153)");
    $color2css = new color2css("rgba(102 51 153 / 1.0)");
    $color2css = new color2css("hsl(270 50% 40% / 1.0)");
    $color2css = new color2css("hsla(270, 50%, 40%, 100%)");
    $color2css = new color2css("hwb(270 20% 40% / 1)");
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

Adjust the HSL saturation and lightness of a color, in the range 0-1:

    $color2css->saturation(1.0);
    $color2css->lightness(0.64);

Adjust the HWB whiteness and blackness of a color, in the range 0-1:

    $color2css->whiteness(0.28);
    $color2css->blackness(0);

Adjust the HSV saturation (colorfulness) and value (brightness) of a color, in the range 0-1:

    $color2css->colorfulness(0.6);
    $color2css->brightness(0.254);

Calculate WCAG contrast ratio of the RGB as a float value between 1 and 21:

    $color1 = new color2css("white");
    $color2 = new color2css("black");
    $contrast = color2css::contrast($color1, $color2);

Export a CSS color definition:

    $color2ccc->keyword("tomato");
    $color2css->hex();              // returns "#ff6347"
    $color2css->hexa();             // returns "#ff6347ff"
    $color2css->rgb();              // returns "rgb(255 99 71 / 100%)"
    $color2css->hsl();              // returns "hsl(9.1 100% 63.9% / 100%)"
    $color2css->hwb();              // returns "hwb(9.1 27.9% 0% / 100%)"
    $color2css->keyword();          // returns "tomato";

### CIE Lab

Define a CSS color in the CIE Lab color space using Lab and LCH:

    $color2css = new color2css("lab(47.9 -30.3 -8.9)");
    $color2css = new color2css("lch(47.9 31.6 196.5 / 100%)");

Interpret a CSS color definition, with clamping for out-of-range values:

    $color2css->lab("lab(150 -30.3 -8.9)"); // returns true
    $color2css->lab("lab(47.9, 30, 10)");   // returns false

Adjust the CIE lightness of a color, in the range 0-100:

    $color2css->cie_l(64);

Adjust the CIE Lab A and B axes of a color:

    $color2css->cie_a(42);
    $color2css->cie_b(80);

Adjust the CIE LCH chroma of a color, with a value > 0:

    $color2css->cie_c(85);

Adjust the CIE LCH hue value of a color, in the range 0-360:

    $color2css->cie_h(245.6);

Export a CSS color definition:

    $color2css->lab();  // returns "lab(64 -35.1 -77.4 / 100%)"
    $color2css->lch();  // returns "lch(64 85 245.6 / 100%)"

### OKlab

Define a CSS color in the OKlab color space using Lab and LCH:

    $color2css = new color2css("oklab(0.54 -0.089 -0.023)");
    $color2css = new color2css("oklch(0.543 0.0927 194.76 / 100%)");

Interpret a CSS color definition, with clamping for out-of-range values:

    $color2css->oklab("oklab(1.1 0.1 0)");  // returns true
    $color2css->oklab("lab(0.7 0.09 0.1)"); // returns false

Adjust the OK lightness of a color, in the range 0-1:

    $color2css->ok_l(0.75);

Adjust the OKlab A and B axes of a color:

    $color2css->ok_a(0.04);
    $color2css->ok_b(0.08);

Adjust the OK LCH chroma of a color, with a value > 0:

    $color2css->ok_c(0.1);

Adjust the OK LCH hue value of a color, in the range 0-360:

    $color2css->ok_h(15.9);

Export a CSS color definition:

    $color2css->oklab();    // returns "oklab(0.750 0.144 0.041 / 100%)"
    $color2css->oklch();    // returns "oklch(0.750 0.150 15.9 / 100%)"
