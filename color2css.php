<?php
    namespace xenocrat;

    class color2css {
        const COLOR2CSS_VERSION_MAJOR        = 6;
        const COLOR2CSS_VERSION_MINOR        = 1;

        const CSS_COLOR_TRANSPARENT          = "#00000000";
        const CSS_COLOR_BLACK                = "#000000ff";
        const CSS_COLOR_SILVER               = "#c0c0c0ff";
        const CSS_COLOR_GRAY                 = "#808080ff";
        const CSS_COLOR_WHITE                = "#ffffffff";
        const CSS_COLOR_MAROON               = "#800000ff";
        const CSS_COLOR_RED                  = "#ff0000ff";
        const CSS_COLOR_PURPLE               = "#800080ff";
        const CSS_COLOR_FUCHSIA              = "#ff00ffff";
        const CSS_COLOR_GREEN                = "#008000ff";
        const CSS_COLOR_LIME                 = "#00ff00ff";
        const CSS_COLOR_OLIVE                = "#808000ff";
        const CSS_COLOR_YELLOW               = "#ffff00ff";
        const CSS_COLOR_NAVY                 = "#000080ff";
        const CSS_COLOR_BLUE                 = "#0000ffff";
        const CSS_COLOR_TEAL                 = "#008080ff";
        const CSS_COLOR_AQUA                 = "#00ffffff";
        const CSS_COLOR_ORANGE               = "#ffa500ff";
        const CSS_COLOR_ALICEBLUE            = "#f0f8ffff";
        const CSS_COLOR_ANTIQUEWHITE         = "#faebd7ff";
        const CSS_COLOR_AQUAMARINE           = "#7fffd4ff";
        const CSS_COLOR_AZURE                = "#f0ffffff";
        const CSS_COLOR_BEIGE                = "#f5f5dcff";
        const CSS_COLOR_BISQUE               = "#ffe4c4ff";
        const CSS_COLOR_BLANCHEDALMOND       = "#ffebcdff";
        const CSS_COLOR_BLUEVIOLET           = "#8a2be2ff";
        const CSS_COLOR_BROWN                = "#a52a2aff";
        const CSS_COLOR_BURLYWOOD            = "#deb887ff";
        const CSS_COLOR_CADETBLUE            = "#5f9ea0ff";
        const CSS_COLOR_CHARTREUSE           = "#7fff00ff";
        const CSS_COLOR_CHOCOLATE            = "#d2691eff";
        const CSS_COLOR_CORAL                = "#ff7f50ff";
        const CSS_COLOR_CORNFLOWERBLUE       = "#6495edff";
        const CSS_COLOR_CORNSILK             = "#fff8dcff";
        const CSS_COLOR_CRIMSON              = "#dc143cff";
        const CSS_COLOR_CYAN                 = "#00ffffff";
        const CSS_COLOR_DARKBLUE             = "#00008bff";
        const CSS_COLOR_DARKCYAN             = "#008b8bff";
        const CSS_COLOR_DARKGOLDENROD        = "#b8860bff";
        const CSS_COLOR_DARKGRAY             = "#a9a9a9ff";
        const CSS_COLOR_DARKGREEN            = "#006400ff";
        const CSS_COLOR_DARKGREY             = "#a9a9a9ff";
        const CSS_COLOR_DARKKHAKI            = "#bdb76bff";
        const CSS_COLOR_DARKMAGENTA          = "#8b008bff";
        const CSS_COLOR_DARKOLIVEGREEN       = "#556b2fff";
        const CSS_COLOR_DARKORANGE           = "#ff8c00ff";
        const CSS_COLOR_DARKORCHID           = "#9932ccff";
        const CSS_COLOR_DARKRED              = "#8b0000ff";
        const CSS_COLOR_DARKSALMON           = "#e9967aff";
        const CSS_COLOR_DARKSEAGREEN         = "#8fbc8fff";
        const CSS_COLOR_DARKSLATEBLUE        = "#483d8bff";
        const CSS_COLOR_DARKSLATEGRAY        = "#2f4f4fff";
        const CSS_COLOR_DARKSLATEGREY        = "#2f4f4fff";
        const CSS_COLOR_DARKTURQUOISE        = "#00ced1ff";
        const CSS_COLOR_DARKVIOLET           = "#9400d3ff";
        const CSS_COLOR_DEEPPINK             = "#ff1493ff";
        const CSS_COLOR_DEEPSKYBLUE          = "#00bfffff";
        const CSS_COLOR_DIMGRAY              = "#696969ff";
        const CSS_COLOR_DIMGREY              = "#696969ff";
        const CSS_COLOR_DODGERBLUE           = "#1e90ffff";
        const CSS_COLOR_FIREBRICK            = "#b22222ff";
        const CSS_COLOR_FLORALWHITE          = "#fffaf0ff";
        const CSS_COLOR_FORESTGREEN          = "#228b22ff";
        const CSS_COLOR_GAINSBORO            = "#dcdcdcff";
        const CSS_COLOR_GHOSTWHITE           = "#f8f8ffff";
        const CSS_COLOR_GOLD                 = "#ffd700ff";
        const CSS_COLOR_GOLDENROD            = "#daa520ff";
        const CSS_COLOR_GREENYELLOW          = "#adff2fff";
        const CSS_COLOR_GREY                 = "#808080ff";
        const CSS_COLOR_HONEYDEW             = "#f0fff0ff";
        const CSS_COLOR_HOTPINK              = "#ff69b4ff";
        const CSS_COLOR_INDIANRED            = "#cd5c5cff";
        const CSS_COLOR_INDIGO               = "#4b0082ff";
        const CSS_COLOR_IVORY                = "#fffff0ff";
        const CSS_COLOR_KHAKI                = "#f0e68cff";
        const CSS_COLOR_LAVENDER             = "#e6e6faff";
        const CSS_COLOR_LAVENDERBLUSH        = "#fff0f5ff";
        const CSS_COLOR_LAWNGREEN            = "#7cfc00ff";
        const CSS_COLOR_LEMONCHIFFON         = "#fffacdff";
        const CSS_COLOR_LIGHTBLUE            = "#add8e6ff";
        const CSS_COLOR_LIGHTCORAL           = "#f08080ff";
        const CSS_COLOR_LIGHTCYAN            = "#e0ffffff";
        const CSS_COLOR_LIGHTGOLDENRODYELLOW = "#fafad2ff";
        const CSS_COLOR_LIGHTGRAY            = "#d3d3d3ff";
        const CSS_COLOR_LIGHTGREEN           = "#90ee90ff";
        const CSS_COLOR_LIGHTGREY            = "#d3d3d3ff";
        const CSS_COLOR_LIGHTPINK            = "#ffb6c1ff";
        const CSS_COLOR_LIGHTSALMON          = "#ffa07aff";
        const CSS_COLOR_LIGHTSEAGREEN        = "#20b2aaff";
        const CSS_COLOR_LIGHTSKYBLUE         = "#87cefaff";
        const CSS_COLOR_LIGHTSLATEGRAY       = "#778899ff";
        const CSS_COLOR_LIGHTSLATEGREY       = "#778899ff";
        const CSS_COLOR_LIGHTSTEELBLUE       = "#b0c4deff";
        const CSS_COLOR_LIGHTYELLOW          = "#ffffe0ff";
        const CSS_COLOR_LIMEGREEN            = "#32cd32ff";
        const CSS_COLOR_LINEN                = "#faf0e6ff";
        const CSS_COLOR_MAGENTA              = "#ff00ffff";
        const CSS_COLOR_MEDIUMAQUAMARINE     = "#66cdaaff";
        const CSS_COLOR_MEDIUMBLUE           = "#0000cdff";
        const CSS_COLOR_MEDIUMORCHID         = "#ba55d3ff";
        const CSS_COLOR_MEDIUMPURPLE         = "#9370dbff";
        const CSS_COLOR_MEDIUMSEAGREEN       = "#3cb371ff";
        const CSS_COLOR_MEDIUMSLATEBLUE      = "#7b68eeff";
        const CSS_COLOR_MEDIUMSPRINGGREEN    = "#00fa9aff";
        const CSS_COLOR_MEDIUMTURQUOISE      = "#48d1ccff";
        const CSS_COLOR_MEDIUMVIOLETRED      = "#c71585ff";
        const CSS_COLOR_MIDNIGHTBLUE         = "#191970ff";
        const CSS_COLOR_MINTCREAM            = "#f5fffaff";
        const CSS_COLOR_MISTYROSE            = "#ffe4e1ff";
        const CSS_COLOR_MOCCASIN             = "#ffe4b5ff";
        const CSS_COLOR_NAVAJOWHITE          = "#ffdeadff";
        const CSS_COLOR_OLDLACE              = "#fdf5e6ff";
        const CSS_COLOR_OLIVEDRAB            = "#6b8e23ff";
        const CSS_COLOR_ORANGERED            = "#ff4500ff";
        const CSS_COLOR_ORCHID               = "#da70d6ff";
        const CSS_COLOR_PALEGOLDENROD        = "#eee8aaff";
        const CSS_COLOR_PALEGREEN            = "#98fb98ff";
        const CSS_COLOR_PALETURQUOISE        = "#afeeeeff";
        const CSS_COLOR_PALEVIOLETRED        = "#db7093ff";
        const CSS_COLOR_PAPAYAWHIP           = "#ffefd5ff";
        const CSS_COLOR_PEACHPUFF            = "#ffdab9ff";
        const CSS_COLOR_PERU                 = "#cd853fff";
        const CSS_COLOR_PINK                 = "#ffc0cbff";
        const CSS_COLOR_PLUM                 = "#dda0ddff";
        const CSS_COLOR_POWDERBLUE           = "#b0e0e6ff";
        const CSS_COLOR_ROSYBROWN            = "#bc8f8fff";
        const CSS_COLOR_ROYALBLUE            = "#4169e1ff";
        const CSS_COLOR_SADDLEBROWN          = "#8b4513ff";
        const CSS_COLOR_SALMON               = "#fa8072ff";
        const CSS_COLOR_SANDYBROWN           = "#f4a460ff";
        const CSS_COLOR_SEAGREEN             = "#2e8b57ff";
        const CSS_COLOR_SEASHELL             = "#fff5eeff";
        const CSS_COLOR_SIENNA               = "#a0522dff";
        const CSS_COLOR_SKYBLUE              = "#87ceebff";
        const CSS_COLOR_SLATEBLUE            = "#6a5acdff";
        const CSS_COLOR_SLATEGRAY            = "#708090ff";
        const CSS_COLOR_SLATEGREY            = "#708090ff";
        const CSS_COLOR_SNOW                 = "#fffafaff";
        const CSS_COLOR_SPRINGGREEN          = "#00ff7fff";
        const CSS_COLOR_STEELBLUE            = "#4682b4ff";
        const CSS_COLOR_TAN                  = "#d2b48cff";
        const CSS_COLOR_THISTLE              = "#d8bfd8ff";
        const CSS_COLOR_TOMATO               = "#ff6347ff";
        const CSS_COLOR_TURQUOISE            = "#40e0d0ff";
        const CSS_COLOR_VIOLET               = "#ee82eeff";
        const CSS_COLOR_WHEAT                = "#f5deb3ff";
        const CSS_COLOR_WHITESMOKE           = "#f5f5f5ff";
        const CSS_COLOR_YELLOWGREEN          = "#9acd32ff";
        const CSS_COLOR_REBECCAPURPLE        = "#663399ff";

        const REGEX_NUM                      = "[+-]?[0-9]*\.?[0-9]+";
        const REGEX_EXP                      = "[+-]?[0-9]*\.?[0-9]+[eE][0-9]+";
        const REGEX_HEX                      = "[0-9a-fA-F]";
        const REGEX_ANGLE                    = "(deg|grad|rad|turn)?";
        const REGEX_NUM_HUE                  = self::REGEX_NUM.self::REGEX_ANGLE;
        const REGEX_EXP_HUE                  = self::REGEX_EXP.self::REGEX_ANGLE;

        const REGEX_RGB =
            "/^rgba?\( *".
            "(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none) +".
            "(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none) +".
            "(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none)".
            "( *\/ *(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none))?".
            " *\)$/";

        const REGEX_RGB_LEGACY =
            "/^rgba?\( *".
            "(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?) *, *".
            "(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?) *, *".
            "(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?)".
            "( *[,\/] *(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?))?".
            " *\)$/";

        const REGEX_HSL =
            "/^hsla?\( *".
            "(".self::REGEX_NUM_HUE."|".self::REGEX_EXP_HUE."|none) +".
            "(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none) +".
            "(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none)".
            "( *\/ *(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none))?".
            " *\)$/";

        const REGEX_HSL_LEGACY =
            "/^hsla?\( *".
            "(".self::REGEX_NUM_HUE."|".self::REGEX_EXP_HUE.") *, *".
            "(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?) *, *".
            "(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?)".
            "( *[,\/] *(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?))?".
            " *\)$/";

        const REGEX_HWB =
            "/^hwb\( *".
            "(".self::REGEX_NUM_HUE."|".self::REGEX_EXP_HUE."|none) +".
            "(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none) +".
            "(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none)".
            "( *\/ *(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none))?".
            " *\)$/";

        const REGEX_LAB =
            "/^lab\( *".
            "(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none) +".
            "(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none) +".
            "(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none)".
            "( *\/ *(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none))?".
            " *\)$/";

        const REGEX_LCH =
            "/^lch\( *".
            "(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none) +".
            "(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none) +".
            "(".self::REGEX_NUM_HUE."|".self::REGEX_EXP_HUE."|none)".
            "( *\/ *(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none))?".
            "\)$/";

        const REGEX_OKLAB =
            "/^oklab\( *".
            "(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none) +".
            "(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none) +".
            "(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none)".
            "( *\/ *(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none))?".
            " *\)$/";

        const REGEX_OKLCH =
            "/^oklch\( *".
            "(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none) +".
            "(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none) +".
            "(".self::REGEX_NUM_HUE."|".self::REGEX_EXP_HUE."|none)".
            "( *\/ *(".self::REGEX_NUM."%?|".self::REGEX_EXP."%?|none))?".
            "\)$/";

        const REGEX_HEX_SHORT =
            "/^#".
            "(".self::REGEX_HEX.")".
            "(".self::REGEX_HEX.")".
            "(".self::REGEX_HEX.")".
            "(".self::REGEX_HEX.")?".
            "$/";

        const REGEX_HEX_LONG =
            "/^#".
            "(".self::REGEX_HEX."{2})".
            "(".self::REGEX_HEX."{2})".
            "(".self::REGEX_HEX."{2})".
            "(".self::REGEX_HEX."{2})?".
            "$/";

        protected $rgb = array(
            "r" => 0.0,
            "g" => 0.0,
            "b" => 0.0
        );
        protected $hsl = array(
            "h" => 0.0,
            "s" => 0.0,
            "l" => 0.0
        );
        protected $hsv = array(
            "h" => 0.0,
            "s" => 0.0,
            "v" => 0.0
        );
        protected $hwb = array(
            "h" => 0.0,
            "w" => 0.0,
            "b" => 0.0
        );
        protected $lab = array(
            "l" => 0.0,
            "a" => 0.0,
            "b" => 0.0
        );
        protected $lch = array(
            "l" => 0.0,
            "c" => 0.0,
            "h" => 0.0
        );
        protected $oklab = array(
            "l" => 0.0,
            "a" => 0.0,
            "b" => 0.0
        );
        protected $oklch = array(
            "l" => 0.0,
            "c" => 0.0,
            "h" => 0.0
        );
        protected $alpha = 0.0;

        public function __construct($color = "transparent") {
            $args = func_get_args();

            if (count($args) < 2)
                return $this->interpret($color);

            if (count($args) < 3)
                throw new \BadMethodCallException(
                    "Missing arguments in call to color constructor."
                );

            $this->red($args[0]);
            $this->green($args[1]);
            $this->blue($args[2]);
            $this->alpha((count($args) == 4) ? $args[3] : 1.0);
        }

        public function list_keywords(): array {
            $keywords = array();

            $reflect = new \ReflectionClass(get_class($this));
            $constants = $reflect->getConstants();

            foreach ($constants as $key => $val) {
                if (preg_match("/^CSS_COLOR_/", $key))
                    $keywords[strtolower(substr($key, 10))] = $val;
            }

            return $keywords;
        }

        public function rgb($str = null): string|bool {
            if (isset($str))
                return $this->interpret_rgb($str);

            $r = $this->number_format($this->rgb["r"] * 255);
            $g = $this->number_format($this->rgb["g"] * 255);
            $b = $this->number_format($this->rgb["b"] * 255);
            $p = $this->number_format($this->alpha * 100, 0);

            return "rgb(".$r." ".$g." ".$b." / ".$p."%)";
        }

        public function hsl($str = null): string|bool {
            if (isset($str))
                return $this->interpret_hsl($str);

            $h = $this->number_format($this->hsl["h"]);
            $s = $this->number_format($this->hsl["s"] * 100);
            $l = $this->number_format($this->hsl["l"] * 100);
            $p = $this->number_format($this->alpha * 100, 0);

            return "hsl(".$h." ".$s."% ".$l."% / ".$p."%)";
        }

        public function hwb($str = null): string|bool {
            if (isset($str))
                return $this->interpret_hwb($str);

            $h = $this->number_format($this->hwb["h"]);
            $w = $this->number_format($this->hwb["w"] * 100);
            $b = $this->number_format($this->hwb["b"] * 100);
            $p = $this->number_format($this->alpha * 100, 0);

            return "hwb(".$h." ".$w."% ".$b."% / ".$p."%)";
        }

        public function lab($str = null): string|bool {
            if (isset($str))
                return $this->interpret_lab($str);

            $l = $this->number_format($this->lab["l"]);
            $a = $this->number_format($this->lab["a"]);
            $b = $this->number_format($this->lab["b"]);
            $p = $this->number_format($this->alpha * 100, 0);

            return "lab(".$l." ".$a." ".$b." / ".$p."%)";
        }

        public function lch($str = null): string|bool {
            if (isset($str))
                return $this->interpret_lch($str);

            $l = $this->number_format($this->lch["l"]);
            $c = $this->number_format($this->lch["c"]);
            $h = $this->number_format($this->lch["h"]);
            $p = $this->number_format($this->alpha * 100, 0);

            return "lch(".$l." ".$c." ".$h." / ".$p."%)";
        }

        public function oklab($str = null): string|bool {
            if (isset($str))
                return $this->interpret_oklab($str);

            $l = $this->number_format($this->oklab["l"], 3);
            $a = $this->number_format($this->oklab["a"], 3);
            $b = $this->number_format($this->oklab["b"], 3);
            $p = $this->number_format($this->alpha * 100, 0);

            return "oklab(".$l." ".$a." ".$b." / ".$p."%)";
        }

        public function oklch($str = null): string|bool {
            if (isset($str))
                return $this->interpret_oklch($str);

            $l = $this->number_format($this->oklch["l"], 3);
            $c = $this->number_format($this->oklch["c"], 3);
            $h = $this->number_format($this->oklch["h"], 1);
            $p = $this->number_format($this->alpha * 100, 0);

            return "oklch(".$l." ".$c." ".$h." / ".$p."%)";
        }

        public function hex($str = null): string|bool {
            if (isset($str))
                return $this->interpret_hex($str);

            $r = (int) round($this->rgb["r"] * 255);
            $g = (int) round($this->rgb["g"] * 255);
            $b = (int) round($this->rgb["b"] * 255);

            $r = str_pad(dechex($r), 2, "0", STR_PAD_LEFT);
            $g = str_pad(dechex($g), 2, "0", STR_PAD_LEFT);
            $b = str_pad(dechex($b), 2, "0", STR_PAD_LEFT);

            return "#".$r.$g.$b;
        }

        public function hexa($str = null): string|bool {
            if (isset($str))
                return $this->interpret_hex($str);

            $r = (int) round($this->rgb["r"] * 255);
            $g = (int) round($this->rgb["g"] * 255);
            $b = (int) round($this->rgb["b"] * 255);
            $p = (int) round($this->alpha * 255);

            $r = str_pad(dechex($r), 2, "0", STR_PAD_LEFT);
            $g = str_pad(dechex($g), 2, "0", STR_PAD_LEFT);
            $b = str_pad(dechex($b), 2, "0", STR_PAD_LEFT);
            $p = str_pad(dechex($p), 2, "0", STR_PAD_LEFT);

            return "#".$r.$g.$b.$p;
        }

        public function red($r = null): float|bool {
            if (!isset($r))
                return $this->rgb["r"];

            if (!is_numeric($r) or $r < 0 or $r > 1)
                throw new \RangeException(
                    "Red value must be in the range 0-1."
                );

            $this->rgb["r"] = (float) $r;

            $hsl = $this->rgb2hsl($this->rgb);

            if (is_nan($hsl["h"]))
                $hsl["h"] = $this->hsl["h"];

            $hwb = $this->rgb2hwb($this->rgb);

            if (is_nan($hwb["h"]))
                $hwb["h"] = $this->hwb["h"];

            $this->hsl = $hsl;
            $this->hwb = $hwb;
            return true;
        }

        public function green($g = null): float|bool {
            if (!isset($g))
                return $this->rgb["g"];

            if (!is_numeric($g) or $g < 0 or $g > 1)
                throw new \RangeException(
                    "Green value must be in the range 0-1."
                );

            $this->rgb["g"] = (float) $g;

            $hsl = $this->rgb2hsl($this->rgb);

            if (is_nan($hsl["h"]))
                $hsl["h"] = $this->hsl["h"];

            $hwb = $this->rgb2hwb($this->rgb);

            if (is_nan($hwb["h"]))
                $hwb["h"] = $this->hwb["h"];

            $this->hsl = $hsl;
            $this->hwb = $hwb;
            return true;
        }

        public function blue($b = null): float|bool {
            if (!isset($b))
                return $this->rgb["b"];

            if (!is_numeric($b) or $b < 0 or $b > 1)
                throw new \RangeException(
                    "Blue value must be in the range 0-1."
                );

            $this->rgb["b"] = (float) $b;

            $hsl = $this->rgb2hsl($this->rgb);

            if (is_nan($hsl["h"]))
                $hsl["h"] = $this->hsl["h"];

            $hwb = $this->rgb2hwb($this->rgb);

            if (is_nan($hwb["h"]))
                $hwb["h"] = $this->hwb["h"];

            $this->hsl = $hsl;
            $this->hwb = $hwb;
            return true;
        }

        public function hue($h = null): float|bool {
            if (!isset($h))
                return $this->hsl["h"];

            if (!is_numeric($h))
                throw new \InvalidArgumentException(
                    "Hue value must be numeric."
                );

            if ($h > 360)
                $h = $h % 360;

            while ($h < 0)
                $h = $h + 360;

            $this->hsl["h"] = (float) $h;

            $this->hsv = $this->hsl2hsv($this->hsl);
            $this->hwb = $this->hsv2hwb($this->hsv);
            $this->rgb = $this->hsl2rgb($this->hsl);
            return true;
        }

        public function saturation($s = null): float|bool {
            if (!isset($s))
                return $this->hsl["s"];

            if (!is_numeric($s) or $s < 0 or $s > 1)
                throw new \RangeException(
                    "Saturation value must be in the range 0-1."
                );

            $this->hsl["s"] = (float) $s;

            $this->hsv = $this->hsl2hsv($this->hsl);
            $this->hwb = $this->hsv2hwb($this->hsv);
            $this->rgb = $this->hsl2rgb($this->hsl);
            return true;
        }

        public function lightness($l = null): float|bool {
            if (!isset($l))
                return $this->hsl["l"];

            if (!is_numeric($l) or $l < 0 or $l > 1)
                throw new \RangeException(
                    "Lightness value must be in the range 0-1."
                );

            $this->hsl["l"] = (float) $l;

            $this->hsv = $this->hsl2hsv($this->hsl);
            $this->hwb = $this->hsv2hwb($this->hsv);
            $this->rgb = $this->hsl2rgb($this->hsl);
            return true;
        }

        public function whiteness($w = null): float|bool {
            if (!isset($w))
                return $this->hwb["w"];

            if (!is_numeric($w) or $w < 0 or $w > 1)
                throw new \RangeException(
                    "Whiteness value must be in the range 0-1."
                );

            $this->hwb["w"] = (float) $w;

            $this->hsv = $this->hwb2hsv($this->hwb);
            $this->hsl = $this->hsv2hsl($this->hsv);
            $this->rgb = $this->hwb2rgb($this->hwb);
            return true;
        }

        public function blackness($d = null): float|bool {
            if (!isset($d))
                return $this->hwb["b"];

            if (!is_numeric($d) or $d < 0 or $d > 1)
                throw new \RangeException(
                    "Blackness value must be in the range 0-1."
                );

            $this->hwb["b"] = (float) $d;

            $this->hsv = $this->hwb2hsv($this->hwb);
            $this->hsl = $this->hsv2hsl($this->hsv);
            $this->rgb = $this->hwb2rgb($this->hwb);
            return true;
        }

        public function cie_l($l = null): float|bool {
            if (!isset($l))
                return $this->lab["l"];

            if (!is_numeric($l) or $l < 0 or $l > 100)
                throw new \RangeException(
                    "CIE lightness value must be in the range 0-100."
                );

            $this->lab["l"] = (float) $l;

            $lch = $this->lab2lch($this->lab);

            if (is_nan($lch["h"]))
                $lch["h"] = $this->lch["h"];

            $this->lch = $lch;
            return true;
        }

        public function cie_a($a = null): float|bool {
            if (!isset($a))
                return $this->lab["a"];

            if (!is_numeric($a))
                throw new \InvalidArgumentException(
                    "CIE A axis value must be numeric."
                );

            $this->lab["a"] = (float) $a;

            $lch = $this->lab2lch($this->lab);

            if (is_nan($lch["h"]))
                $lch["h"] = $this->lch["h"];

            $this->lch = $lch;
            return true;
        }

        public function cie_b($b = null): float|bool {
            if (!isset($b))
                return $this->lab["b"];

            if (!is_numeric($b))
                throw new \InvalidArgumentException(
                    "CIE B axis value must be numeric."
                );

            $this->lab["b"] = (float) $b;

            $lch = $this->lab2lch($this->lab);

            if (is_nan($lch["h"]))
                $lch["h"] = $this->lch["h"];

            $this->lch = $lch;
            return true;
        }

        public function cie_c($c = null): float|bool {
            if (!isset($c))
                return $this->lch["c"];

            if (!is_numeric($c) or $c < 0)
                throw new \RangeException(
                    "CIE chroma value must be > 0."
                );

            $this->lch["c"] = (float) $c;

            $this->lab = $this->lch2lab($this->lch);
            return true;
        }

        public function cie_h($h = null): float|bool {
            if (!isset($h))
                return $this->lch["h"];

            if (!is_numeric($h))
                throw new \InvalidArgumentException(
                    "CIE hue value must be numeric."
                );

            if ($h > 360)
                $h = $h % 360;

            while ($h < 0)
                $h = $h + 360;

            $this->lch["h"] = (float) $h;

            $this->lab = $this->lch2lab($this->lch);
            return true;
        }

        public function ok_l($l = null): float|bool {
            if (!isset($l))
                return $this->oklab["l"];

            if (!is_numeric($l) or $l < 0 or $l > 1)
                throw new \RangeException(
                    "OK lightness value must be in the range 0-1."
                );

            $this->oklab["l"] = (float) $l;

            $oklch = $this->oklab2oklch($this->oklab);

            if (is_nan($oklch["h"]))
                $oklch["h"] = $this->oklch["h"];

            $this->oklch = $oklch;
            return true;
        }

        public function ok_a($a = null): float|bool {
            if (!isset($a))
                return $this->oklab["a"];

            if (!is_numeric($a))
                throw new \InvalidArgumentException(
                    "OK A axis value must be numeric."
                );

            $this->oklab["a"] = (float) $a;

            $oklch = $this->oklab2oklch($this->oklab);

            if (is_nan($oklch["h"]))
                $oklch["h"] = $this->oklch["h"];

            $this->oklch = $oklch;
            return true;
        }

        public function ok_b($b = null): float|bool {
            if (!isset($b))
                return $this->oklab["b"];

            if (!is_numeric($b))
                throw new \InvalidArgumentException(
                    "OK B axis value must be numeric."
                );

            $this->oklab["b"] = (float) $b;

            $oklch = $this->oklab2oklch($this->oklab);

            if (is_nan($oklch["h"]))
                $oklch["h"] = $this->oklch["h"];

            $this->oklch = $oklch;
            return true;
        }

        public function ok_c($c = null): float|bool {
            if (!isset($c))
                return $this->oklch["c"];

            if (!is_numeric($c) or $c < 0)
                throw new \RangeException(
                    "OK chroma value must be > 0."
                );

            $this->oklch["c"] = (float) $c;

            $this->oklab = $this->oklch2oklab($this->oklch);
            return true;
        }

        public function ok_h($h = null): float|bool {
            if (!isset($h))
                return $this->oklch["h"];

            if (!is_numeric($h))
                throw new \InvalidArgumentException(
                    "OK hue value must be numeric."
                );

            if ($h > 360)
                $h = $h % 360;

            while ($h < 0)
                $h = $h + 360;

            $this->oklch["h"] = (float) $h;

            $this->oklab = $this->oklch2oklab($this->oklch);
            return true;
        }

        public function alpha($a = null): float|bool {
            if (!isset($a))
                return $this->alpha;

            if (!is_numeric($a) or $a < 0 or $a > 1)
                throw new \RangeException(
                    "Alpha value must be in the range 0-1."
                );

            $this->alpha = (float) $a;

            return true;
        }

        public function keyword($str = null): string|bool {
            if (isset($str))
                return $this->interpret_keyword($str);

            $reflect = new \ReflectionClass(get_class($this));
            $constants = $reflect->getConstants();

            $colors = array();

            foreach ($constants as $key => $val) {
                if (preg_match("/^CSS_COLOR_/", $key))
                    $colors[strtolower(substr($key, 10))] = $val;
            }

            $hexa = $this->hexa();

            foreach ($colors as $name => $val) {
                if ($hexa == $val)
                    return $name;
            }

            return false;
        }

        public static function contrast($color1, $color2): float {
            if (!$color1 instanceof color2css)
                throw new \InvalidArgumentException(
                    "Color 1 must be an instance of color2css."
                );

            if (!$color2 instanceof color2css)
                throw new \InvalidArgumentException(
                    "Color 2 must be an instance of color2css."
                );

            $l1 = self::luminance($color1);
            $l2 = self::luminance($color2);

            $c = ($l1 > $l2) ?
                ($l1 + 0.05) / ($l2 + 0.05) :
                ($l2 + 0.05) / ($l1 + 0.05) ;

            return (float) $c;
        }

        public static function luminance($color): float {
            if (!$color instanceof color2css)
                throw new \InvalidArgumentException(
                    "Color must be an instance of color2css."
                );

            $n = $color->red();

            $r = ($n <= 0.03928) ?
                $n / 12.92 :
                (($n + 0.055) / 1.055) ** 2.4 ;

            $n = $color->green();

            $g = ($n <= 0.03928) ?
                $n / 12.92 :
                (($n + 0.055) / 1.055) ** 2.4 ;

            $n = $color->blue();

            $b = ($n <= 0.03928) ?
                $n / 12.92 :
                (($n + 0.055) / 1.055) ** 2.4 ;

            $l = (0.2126 * $r) + (0.7152 * $g) + (0.0722 * $b);

            return (float) $l;
        }

        protected function deg($str): float {
            if (preg_match("/grad$/i", $str))
                return (float) $str * 0.9;

            if (preg_match("/rad$/i", $str))
                return (float) $str * (180 / M_PI);

            if (preg_match("/turn$/i", $str))
                return (float) $str * 360;

            return (float) $str;
        }

        protected function clamp($num, $min, $max): int|float {
            if ($num < $min)
                $num = $min;

            if ($num > $max)
                $num = $max;

            return $num;
        }

        protected function number_format($num, $decimals = 1): string {
            $str = number_format($num, $decimals, ".", "");
            return preg_replace("/\.0+$/", "", $str);
        }

        protected function hue2rgb($m1, $m2, $h): float {
            if ($h < 0)
                $h = $h + 1;

            if ($h > 1)
                $h = $h - 1;

            if (($h * 6) < 1)
                return $m1 + ($m2 - $m1) * $h * 6;

            if (($h * 2) < 1)
                return $m2;

            if (($h * 3) < 2)
                return $m1 + ($m2 - $m1) * (((1 / 3) * 2) - $h) * 6;

            return $m1;
        }

        protected function rgb2hsl($rgb): array {
            $r = $rgb["r"];
            $g = $rgb["g"];
            $b = $rgb["b"];

            $max = max($r, $g, $b);
            $min = min($r, $g, $b);

            $c = $max - $min;
            $l = ($max + $min) / 2;

            $s = ($l == 0 or $l == 1) ?
                0 :
                $c / (1 - abs((2 * $l) - 1)) ;

            if ($s > 0) {
                switch ($max) {
                    case $r:
                        $h = ($c == 0) ?
                            0 :
                            60 * ($g - $b) / $c ;

                        break;
                    case $g:
                        $h = ($c == 0) ?
                            0 :
                            60 * ((($b - $r) / $c) + 2) ;

                        break;
                    case $b:
                        $h = ($c == 0) ?
                            0 :
                            60 * ((($r - $g) / $c) + 4) ;

                        break;
                }

                if ($h > 360)
                    $h = $h % 360;

                while ($h < 0)
                    $h = $h + 360;
            } else {
                $h = NAN;
            }

            return array(
                "h" => (float) $h,
                "s" => (float) $this->clamp($s, 0.0, 1.0),
                "l" => (float) $this->clamp($l, 0.0, 1.0)
            );
        }

        protected function hsl2rgb($hsl): array {
            $h = $hsl["h"] / 360;
            $s = $hsl["s"];
            $l = $hsl["l"];

            $m2 = ($l <= 0.5) ?
                $l * ($s + 1) :
                ($l + $s) - ($l * $s) ;

            $m1 = ($l * 2) - $m2;

            $r = $this->hue2rgb($m1, $m2, $h + (1 / 3));
            $g = $this->hue2rgb($m1, $m2, $h);
            $b = $this->hue2rgb($m1, $m2, $h - (1 / 3));

            return array(
                "r" => (float) $this->clamp($r, 0.0, 1.0),
                "g" => (float) $this->clamp($g, 0.0, 1.0),
                "b" => (float) $this->clamp($b, 0.0, 1.0)
            );
        }

        protected function hsl2hsv($hsl): array {
            $h = $hsl["h"];
            $s = $hsl["s"];
            $l = $hsl["l"];

            $v = $l + ($s * min($l, 1 - $l));

            $n = ($v == 0) ?
                0 :
                2 * (1 - ($l / $v)) ;

            return array(
                "h" => (float) $h,
                "s" => (float) $this->clamp($n, 0.0, 1.0),
                "v" => (float) $this->clamp($v, 0.0, 1.0)
            );
        }

        protected function hsv2hsl($hsv): array {
            $h = $hsv["h"];
            $s = $hsv["s"];
            $v = $hsv["v"];

            $l = $v * (1 - ($s / 2));

            $n = ($l == 0 or $l == 1) ?
                0 :
                ($v - $l) / min($l, 1 - $l) ; 

            return array(
                "h" => (float) $h,
                "s" => (float) $this->clamp($n, 0.0, 1.0),
                "l" => (float) $this->clamp($l, 0.0, 1.0)
            );
        }

        protected function hsv2hwb($hsv): array {
            $h = $hsv["h"];
            $s = $hsv["s"];
            $v = $hsv["v"];

            $w = (1 - $s) * $v;
            $b = 1 - $v;

            return array(
                "h" => (float) $h,
                "w" => (float) $this->clamp($w, 0.0, 1.0),
                "b" => (float) $this->clamp($b, 0.0, 1.0)
            );
        }

        protected function hwb2hsv($hwb): array {
            $h = $hwb["h"];
            $w = $hwb["w"];
            $b = $hwb["b"];

            $s = 1 - ((1 - $b == 0) ? 1 : ($w / (1 - $b)));
            $v = 1 - $b;

            return array(
                "h" => (float) $h,
                "s" => (float) $this->clamp($s, 0.0, 1.0),
                "v" => (float) $this->clamp($v, 0.0, 1.0)
            );
        }

        protected function rgb2hwb($rgb): array {
            $r = $rgb["r"];
            $g = $rgb["g"];
            $b = $rgb["b"];
            $w = min($r, $g, $b);
            $d = 1 - max($r, $g, $b);

            return array(
                "h" => $this->rgb2hsl($rgb)["h"],
                "w" => (float) $this->clamp($w, 0.0, 1.0),
                "b" => (float) $this->clamp($d, 0.0, 1.0)
            );
        }

        protected function hwb2rgb($hwb): array {
            $h = $hwb["h"];
            $w = $hwb["w"];
            $d = $hwb["b"];

            if ($w + $d >= 1) {
                $n = $w / ($w + $d);
                $r = $g = $b = $n;
            } else {
                $rgb = $this->hsl2rgb(
                    array(
                        "h" => $h,
                        "s" => 1.0,
                        "l" => 0.5
                    )
                );

                $r = ($rgb["r"] * (1 - $w - $d)) + $w;
                $g = ($rgb["g"] * (1 - $w - $d)) + $w;
                $b = ($rgb["b"] * (1 - $w - $d)) + $w;
            }

            return array(
                "r" => (float) $this->clamp($r, 0.0, 1.0),
                "g" => (float) $this->clamp($g, 0.0, 1.0),
                "b" => (float) $this->clamp($b, 0.0, 1.0)
            );
        }

        protected function lab2lch($lab): array {
            $l = $lab["l"];
            $a = $lab["a"];
            $b = $lab["b"];

            $c = sqrt(($a ** 2) + ($b ** 2));

            if ($c > 0) {
                $h = atan2($b, $a);

                $h = ($h > 0) ?
                    ($h / M_PI) * 180 :
                    360 - (abs($h) / M_PI) * 180 ;
            } else {
                $h = NAN;
            }

            return array(
                "l" => (float) $this->clamp($l, 0.0, 100),
                "c" => (float) $this->clamp($c, 0.0, INF),
                "h" => (float) $h
            );
        }

        protected function lch2lab($lch): array {
            $l = $lch["l"];
            $c = $lch["c"];
            $h = $lch["h"];

            $a = cos(deg2rad($h)) * $c;
            $b = sin(deg2rad($h)) * $c;

            return array(
                "l" => (float) $this->clamp($l, 0.0, 100),
                "a" => (float) $a,
                "b" => (float) $b
            );
        }

        protected function oklab2oklch($oklab): array {
            $l = $oklab["l"];
            $a = $oklab["a"];
            $b = $oklab["b"];

            $c = sqrt(($a ** 2) + ($b ** 2));

            if ($c > 0) {
                $h = atan2($b, $a);

                $h = ($h > 0) ?
                    ($h / M_PI) * 180 :
                    360 - (abs($h) / M_PI) * 180 ;
            } else {
                $h = NAN;
            }

            return array(
                "l" => (float) $this->clamp($l, 0.0, 1.0),
                "c" => (float) $this->clamp($c, 0.0, INF),
                "h" => (float) $h
            );
        }

        protected function oklch2oklab($oklch): array {
            $l = $oklch["l"];
            $c = $oklch["c"];
            $h = $oklch["h"];

            $a = cos(deg2rad($h)) * $c;
            $b = sin(deg2rad($h)) * $c;

            return array(
                "l" => (float) $this->clamp($l, 0.0, 1.0),
                "a" => (float) $a,
                "b" => (float) $b
            );
        }

        protected function interpret($color): void {
            if (!is_string($color))
                throw new \InvalidArgumentException(
                    "Expected string in call to color constructor."
                );

            if (preg_match("/^rgba?\(/", $color)) {
                if ($this->interpret_rgb($color))
                    return;
            }

            if (preg_match("/^hsla?\(/", $color)) {
                if ($this->interpret_hsl($color))
                    return;
            }

            if (preg_match("/^hwb\(/", $color)) {
                if ($this->interpret_hwb($color))
                    return;
            }

            if (preg_match("/^lab\(/", $color)) {
                if ($this->interpret_lab($color))
                    return;
            }

            if (preg_match("/^lch\(/", $color)) {
                if ($this->interpret_lch($color))
                    return;
            }

            if (preg_match("/^oklab\(/", $color)) {
                if ($this->interpret_oklab($color))
                    return;
            }

            if (preg_match("/^oklch\(/", $color)) {
                if ($this->interpret_oklch($color))
                    return;
            }

            if (preg_match("/^#[0-9a-f]{3,8}/", $color)) {
                if ($this->interpret_hex($color))
                    return;
            }

            if (preg_match("/^[a-z]+/i", $color)) {
                if ($this->interpret_keyword($color))
                    return;
            }

            throw new \InvalidArgumentException(
                "Invalid string supplied to color constructor."
            );
        }

        protected function interpret_rgb($str): bool {
            if (
                !preg_match(self::REGEX_RGB, $str, $rgb) and
                !preg_match(self::REGEX_RGB_LEGACY, $str, $rgb)
            )
                return false;

            $a = 1.0;

            for ($i = 1; $i < count($rgb) ; $i++) { 
                $val = $rgb[$i];

                if ($val == "none")
                    $val = 0;

                switch ($i) {
                    case 1:
                        $r = (strpos($val, "%") ?
                            (float) $val / 100 :
                            (float) $val / 255) ;

                        break;
                    case 2:
                        $g = (strpos($val, "%") ?
                            (float) $val / 100 :
                            (float) $val / 255) ;

                        break;
                    case 3:
                        $b = (strpos($val, "%") ?
                            (float) $val / 100 :
                            (float) $val / 255) ;

                        break;
                    case 5:
                        $a = strpos($val, "%") ?
                            (float) $val / 100 :
                            (float) $val ;

                        break;
                }
            }

            $this->red(
                $this->clamp($r, 0.0, 1.0)
            );
            $this->green(
                $this->clamp($g, 0.0, 1.0)
            );
            $this->blue(
                $this->clamp($b, 0.0, 1.0)
            );
            $this->alpha(
                $this->clamp($a, 0.0, 1.0)
            );

            return true; 
        }

        protected function interpret_hsl($str): bool {
            if (
                !preg_match(self::REGEX_HSL, $str, $hsl) and
                !preg_match(self::REGEX_HSL_LEGACY, $str, $hsl)
            )
                return false;

            $a = 1.0;

            for ($i = 1; $i < count($hsl) ; $i++) { 
                $val = $hsl[$i];

                if ($val == "none")
                    $val = 0;

                switch ($i) {
                    case 1:
                        $h = $this->deg($val);
                        break;
                    case 4:
                        $s = (float) $val / 100;
                        break;
                    case 5:
                        $l = (float) $val / 100;
                        break;
                    case 7:
                        $a = strpos($val, "%") ?
                            (float) $val / 100 :
                            (float) $val ;

                        break;
                }
            }

            $this->hue(
                $h
            );
            $this->saturation(
                $this->clamp($s, 0.0, 1.0)
            );
            $this->lightness(
                $this->clamp($l, 0.0, 1.0)
            );
            $this->alpha(
                $this->clamp($a, 0.0, 1.0)
            );

            return true; 
        }

        protected function interpret_hwb($str): bool {
            if (!preg_match(self::REGEX_HWB, $str, $hwb))
                return false;

            $a = 1.0;

            for ($i = 1; $i < count($hwb) ; $i++) { 
                $val = $hwb[$i];

                if ($val == "none")
                    $val = 0;

                switch ($i) {
                    case 1:
                        $h = $this->deg($val);
                        break;
                    case 4:
                        $w = (float) $val / 100;
                        break;
                    case 5:
                        $d = (float) $val / 100;
                        break;
                    case 7:
                        $a = strpos($val, "%") ?
                            (float) $val / 100 :
                            (float) $val ;

                        break;
                }
            }

            $this->hue(
                $h
            );
            $this->whiteness(
                $this->clamp($w, 0.0, 1.0)
            );
            $this->blackness(
                $this->clamp($d, 0.0, 1.0)
            );
            $this->alpha(
                $this->clamp($a, 0.0, 1.0)
            );

            return true; 
        }

        protected function interpret_lab($str): bool {
            if (!preg_match(self::REGEX_LAB, $str, $lab))
                return false;

            $p = 1.0;

            for ($i = 1; $i < count($lab) ; $i++) { 
                $val = $lab[$i];

                if ($val == "none")
                    $val = 0;

                switch ($i) {
                    case 1:
                        $l = (float) $val;
                        break;
                    case 2:
                        $a = strpos($val, "%") ?
                            (float) $val * 1.25 :
                            (float) $val ;

                        break;
                    case 3:
                        $b = strpos($val, "%") ?
                            (float) $val * 1.25 :
                            (float) $val ;

                        break;
                    case 5:
                        $p = strpos($val, "%") ?
                            (float) $val / 100 :
                            (float) $val ;

                        break;
                }
            }

            $this->cie_l(
                $this->clamp($l, 0.0, 100)
            );
            $this->cie_a(
                $a
            );
            $this->cie_b(
                $b
            );
            $this->alpha(
                $this->clamp($p, 0.0, 1.0)
            );

            return true; 
        }

        protected function interpret_lch($str): bool {
            if (!preg_match(self::REGEX_LCH, $str, $lch))
                return false;

            $p = 1.0;

            for ($i = 1; $i < count($lch) ; $i++) { 
                $val = $lch[$i];

                if ($val == "none")
                    $val = 0;

                switch ($i) {
                    case 1:
                        $l = (float) $val;
                        break;
                    case 2:
                        $c = strpos($val, "%") ?
                            (float) $val * 1.50 :
                            (float) $val ;

                        break;
                    case 3:
                        $h = $this->deg($val);
                        break;
                    case 7:
                        $p = strpos($val, "%") ?
                            (float) $val / 100 :
                            (float) $val ;

                        break;
                }
            }

            $this->cie_l(
                $this->clamp($l, 0.0, 100)
            );
            $this->cie_c(
                $this->clamp($c, 0.0, INF)
            );
            $this->cie_h(
                $h
            );
            $this->alpha(
                $this->clamp($p, 0.0, 1.0)
            );

            return true; 
        }

        protected function interpret_oklab($str): bool {
            if (!preg_match(self::REGEX_OKLAB, $str, $lab))
                return false;

            $p = 1.0;

            for ($i = 1; $i < count($lab) ; $i++) { 
                $val = $lab[$i];

                if ($val == "none")
                    $val = 0;

                switch ($i) {
                    case 1:
                        $l = strpos($val, "%") ?
                            (float) $val / 100 :
                            (float) $val ;

                        break;
                    case 2:
                        $a = strpos($val, "%") ?
                            (float) $val / 250 :
                            (float) $val ;

                        break;
                    case 3:
                        $b = strpos($val, "%") ?
                            (float) $val / 250 :
                            (float) $val ;

                        break;
                    case 5:
                        $p = strpos($val, "%") ?
                            (float) $val / 100 :
                            (float) $val ;

                        break;
                }
            }

            $this->ok_l(
                $this->clamp($l, 0.0, 1.0)
            );
            $this->ok_a(
                $a
            );
            $this->ok_b(
                $b
            );
            $this->alpha(
                $this->clamp($p, 0.0, 1.0)
            );

            return true; 
        }

        protected function interpret_oklch($str): bool {
            if (!preg_match(self::REGEX_OKLCH, $str, $lch))
                return false;

            $p = 1.0;

            for ($i = 1; $i < count($lch) ; $i++) { 
                $val = $lch[$i];

                if ($val == "none")
                    $val = 0;

                switch ($i) {
                    case 1:
                        $l = strpos($val, "%") ?
                            (float) $val / 100 :
                            (float) $val ;

                        break;
                    case 2:
                        $c = strpos($val, "%") ?
                            (float) $val / 250 :
                            (float) $val ;

                        break;
                    case 3:
                        $h = $this->deg($val);
                        break;
                    case 7:
                        $p = strpos($val, "%") ?
                            (float) $val / 100 :
                            (float) $val ;

                        break;
                }
            }

            $this->ok_l(
                $this->clamp($l, 0.0, 1.0)
            );
            $this->ok_c(
                $this->clamp($c, 0.0, INF)
            );
            $this->ok_h(
                $h
            );
            $this->alpha(
                $this->clamp($p, 0.0, 1.0)
            );

            return true; 
        }

        protected function interpret_hex($str): bool {
            switch (strlen($str)) {
                case 4:
                case 5:
                    if (!preg_match(self::REGEX_HEX_SHORT, $str, $hex))
                        return false;
                    else
                        break;
                case 7:
                case 9:
                    if (!preg_match(self::REGEX_HEX_LONG, $str, $hex))
                        return false;
                    else
                        break;
                default:
                    return false;
            }

            $a = 1.0;

            for ($i = 1; $i < count($hex) ; $i++) { 
                if (strlen($hex[$i]) < 2)
                    $hex[$i] = $hex[$i].$hex[$i];

                $dec = hexdec($hex[$i]);

                switch ($i) {
                    case 1:
                        $r = $dec / 255;
                        break;
                    case 2:
                        $g = $dec / 255;
                        break;
                    case 3:
                        $b = $dec / 255;
                        break;
                    case 4:
                        $a = $dec / 255;
                        break;
                }
            }

            $this->red(
                $this->clamp($r, 0.0, 1.0)
            );
            $this->green(
                $this->clamp($g, 0.0, 1.0)
            );
            $this->blue(
                $this->clamp($b, 0.0, 1.0)
            );
            $this->alpha(
                $this->clamp($a, 0.0, 1.0)
            );

            return true;
        }

        protected function interpret_keyword($str): bool {
            $const = 'self::CSS_COLOR_'.strtoupper($str);

            if (defined($const))
                return $this->interpret_hex(constant($const));

            return false;
        }
    }
