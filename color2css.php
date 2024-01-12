<?php
    namespace xenocrat;

    class color2css {
        const COLOR2CSS_VERSION_MAJOR        = 4;
        const COLOR2CSS_VERSION_MINOR        = 4;

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

        private $rgb = array(
            "r" => 0.0,
            "g" => 0.0,
            "b" => 0.0
        );
        private $hsl = array(
            "h" => 0.0,
            "s" => 0.0,
            "l" => 0.0
        );
        private $hwb = array(
            "h" => 0.0,
            "w" => 0.0,
            "b" => 0.0
        );
        private $alpha = 0.0;

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

        public function rgb($str = null): string|bool {
            if (isset($str))
                return $this->interpret_rgb($str);

            $r = (int) round($this->rgb["r"] * 255);
            $g = (int) round($this->rgb["g"] * 255);
            $b = (int) round($this->rgb["b"] * 255);
            $a = $this->num($this->alpha);

            return "rgb(".$r.", ".$g.", ".$b.", ".$a.")";
        }

        public function hsl($str = null): string|bool {
            if (isset($str))
                return $this->interpret_hsl($str);

            $h = (int) round($this->hsl["h"]);
            $s = (int) round($this->hsl["s"] * 100);
            $l = (int) round($this->hsl["l"] * 100);
            $a = $this->num($this->alpha);

            return "hsl(".$h.", ".$s."%, ".$l."%, ".$a.")";
        }

        public function hwb($str = null): string|bool {
            if (isset($str))
                return $this->interpret_hwb($str);

            $h = (int) round($this->hwb["h"]);
            $w = (int) round($this->hwb["w"] * 100);
            $b = (int) round($this->hwb["b"] * 100);
            $a = $this->num($this->alpha);

            return "hwb(".$h." ".$w."% ".$b."% / ".$a.")";
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
            $a = (int) round($this->alpha * 255);

            $r = str_pad(dechex($r), 2, "0", STR_PAD_LEFT);
            $g = str_pad(dechex($g), 2, "0", STR_PAD_LEFT);
            $b = str_pad(dechex($b), 2, "0", STR_PAD_LEFT);
            $a = str_pad(dechex($a), 2, "0", STR_PAD_LEFT);

            return "#".$r.$g.$b.$a;
        }

        public function red($r = null): float|bool {
            if (!isset($r))
                return $this->rgb["r"];

            if (!is_numeric($r) or $r < 0 or $r > 1)
                throw new \RangeException(
                    "Red value must be in the range 0-1."
                );

            $this->rgb["r"] = (float) $r;
            $this->hsl = $this->rgb2hsl($this->rgb);
            $this->hwb = $this->rgb2hwb($this->rgb);

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
            $this->hsl = $this->rgb2hsl($this->rgb);
            $this->hwb = $this->rgb2hwb($this->rgb);

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
            $this->hsl = $this->rgb2hsl($this->rgb);
            $this->hwb = $this->rgb2hwb($this->rgb);

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
            $this->rgb = $this->hsl2rgb($this->hsl);
            $this->hwb = $this->rgb2hwb($this->rgb);

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
            $this->rgb = $this->hsl2rgb($this->hsl);
            $this->hwb = $this->rgb2hwb($this->rgb);

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
            $this->rgb = $this->hsl2rgb($this->hsl);
            $this->hwb = $this->rgb2hwb($this->rgb);

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
            $this->rgb = $this->hwb2rgb($this->hwb);
            $this->hsl = $this->rgb2hsl($this->rgb);

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
            $this->rgb = $this->hwb2rgb($this->hwb);
            $this->hsl = $this->rgb2hsl($this->rgb);

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

        public function keywords(): array {
            $keywords = array();

            $reflect = new \ReflectionClass(get_class($this));
            $constants = $reflect->getConstants();

            foreach ($constants as $key => $val) {
                if (preg_match("/^CSS_COLOR_/", $key))
                    $keywords[strtolower(substr($key, 10))] = $val;
            }

            return $keywords;
        }

        static function contrast($color1, $color2): float {
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

        static function luminance($color): float {
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

            $l = ((0.2126 * $r) + (0.7152 * $g) + (0.0722 * $b));

            return (float) $l;
        }

        private function deg($str): float {
            if (preg_match("/^[\.0-9]+grad$/i", $str))
                return (float) $str * 0.9;

            if (preg_match("/^[\.0-9]+rad$/i", $str))
                return (float) $str * (180 / M_PI);

            if (preg_match("/^[\.0-9]+turn$/i", $str))
                return (float) $str * 360;

            return (float) $str;
        }

        private function num($float): string {
            $dec = round($float, 2);

            $str = ($dec == 1.00 or $dec == 0.00) ?
                number_format($dec, 0) :
                number_format($dec, 2) ;

            return $str;
        }

        private function rgb2hsl($rgb): array {
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

            if ($s > 1)
                $s = 1;

            if ($s < 0)
                $s = 0;

            if ($l > 1)
                $l = 1;

            if ($l < 0)
                $l = 0;

            return array(
                "h" => (float) $h,
                "s" => (float) $s,
                "l" => (float) $l
            );
        }

        private function hsl2rgb($hsl): array {
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

            if ($r > 1)
                $r = 1;

            if ($r < 0)
                $r = 0;

            if ($g > 1)
                $g = 1;

            if ($g < 0)
                $g = 0;

            if ($b > 1)
                $b = 1;

            if ($b < 0)
                $b = 0;

            return array(
                "r" => (float) $r,
                "g" => (float) $g,
                "b" => (float) $b
            );
        }

        private function rgb2hwb($rgb): array {
            $r = $rgb["r"];
            $g = $rgb["g"];
            $b = $rgb["b"];
            $w = min($r, $g, $b);
            $d = 1 - max($r, $g, $b);

            if ($w > 1)
                $w = 1;

            if ($w < 0)
                $w = 0;

            if ($b > 1)
                $b = 1;

            if ($b < 0)
                $b = 0;

            return array(
                "h" => $this->rgb2hsl($rgb)["h"],
                "w" => (float) $w,
                "b" => (float) $d
            );
        }

        private function hwb2rgb($hwb): array {
            $h = $hwb["h"];
            $w = $hwb["w"];
            $d = $hwb["b"];

            if ($w + $d >= 1) {
                $n = $w / ($w + $d);
                $r = $g = $b = $n;
            } else {
                $rgb = $this->hsl2rgb(
                    array("h" => $h, "s" => 1.0, "l" => 0.5)
                );

                $r = ($rgb["r"] * ((1 - $w) - $d)) + $w;
                $g = ($rgb["g"] * ((1 - $w) - $d)) + $w;
                $b = ($rgb["b"] * ((1 - $w) - $d)) + $w;
            }

            if ($r > 1)
                $r = 1;

            if ($r < 0)
                $r = 0;

            if ($g > 1)
                $g = 1;

            if ($g < 0)
                $g = 0;

            if ($b > 1)
                $b = 1;

            if ($b < 0)
                $b = 0;

            return array(
                "r" => (float) $r,
                "g" => (float) $g,
                "b" => (float) $b
            );
        }

        private function hue2rgb($m1, $m2, $h): float {
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

        private function interpret($color): void {
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

        private function interpret_rgb($str): bool {
            $regex = "/^rgba?\(([0-9]+%?) *, *([0-9]+%?) *, *([0-9]+%?)( *[,\/] *[\.0-9]+%?)?\)/";

            if (!preg_match($regex, $str, $rgb))
                return false;

            $a = 1.0;

            for ($i = 1; $i < count($rgb) ; $i++) { 
                $val = trim($rgb[$i], ", /");

                switch ($i) {
                    case 1:
                        $r = (strpos($val, "%") ?
                            (int) $val / 100 :
                            (int) $val / 255) ;

                        break;
                    case 2:
                        $g = (strpos($val, "%") ?
                            (int) $val / 100 :
                            (int) $val / 255) ;

                        break;
                    case 3:
                        $b = (strpos($val, "%") ?
                            (int) $val / 100 :
                            (int) $val / 255) ;

                        break;
                    case 4:
                        $a = strpos($val, "%") ?
                            (int) $val / 100 :
                            (float) $val ;

                        break;
                }
            }

            if ($r < 0 or $g < 0 or $b < 0 or $a < 0)
                return false;

            if ($r > 1 or $g > 1 or $b > 1 or $a > 1)
                return false;

            $this->red($r);
            $this->green($g);
            $this->blue($b);
            $this->alpha($a);

            return true; 
        }

        private function interpret_hsl($str): bool {
            $regex = "/^hsla?\((-?[\.0-9]+[a-zA-Z]*) *, *([0-9]+%) *, *([0-9]+%)( *[,\/] *[\.0-9]+%?)?\)/";

            if (!preg_match($regex, $str, $hsl))
                return false;

            $a = 1.0;

            for ($i = 1; $i < count($hsl) ; $i++) { 
                $val = trim($hsl[$i], ", /");

                switch ($i) {
                    case 1:
                        $h = $this->deg($val);
                        break;
                    case 2:
                        $s = (int) $val / 100;
                        break;
                    case 3:
                        $l = (int) $val / 100;
                        break;
                    case 4:
                        $a = strpos($val, "%") ?
                            (int) $val / 100 :
                            (float) $val ;

                        break;
                }
            }

            if ($s < 0 or $l < 0 or $a < 0)
                return false;

            if ($s > 1 or $l > 1 or $a > 1)
                return false;

            $this->hue($h);
            $this->saturation($s);
            $this->lightness($l);
            $this->alpha($a);

            return true; 
        }

        private function interpret_hwb($str): bool {
            $regex = "/^hwb\((-?[\.0-9]+[a-zA-Z]*) +([0-9]+%) +([0-9]+%)( *\/ *[\.0-9]+%?)?\)/";

            if (!preg_match($regex, $str, $hwb))
                return false;

            $a = 1.0;

            for ($i = 1; $i < count($hwb) ; $i++) { 
                $val = trim($hwb[$i], ", /");

                switch ($i) {
                    case 1:
                        $h = $this->deg($val);
                        break;
                    case 2:
                        $w = (int) $val / 100;
                        break;
                    case 3:
                        $d = (int) $val / 100;
                        break;
                    case 4:
                        $a = strpos($val, "%") ?
                            (int) $val / 100 :
                            (float) $val ;

                        break;
                }
            }

            if ($w < 0 or $d < 0 or $a < 0)
                return false;

            if ($w > 1 or $d > 1 or $a > 1)
                return false;

            $this->hue($h);
            $this->whiteness($w);
            $this->blackness($d);
            $this->alpha($a);

            return true; 
        }

        private function interpret_hex($str): bool {
            $regex_45 = "/^#([0-9a-f])([0-9a-f])([0-9a-f])([0-9a-f])?/i";
            $regex_79 = "/^#([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})?/i";

            switch (strlen($str)) {
                case 4:
                case 5:
                    if (!preg_match($regex_45, $str, $hex))
                        return false;
                    else
                        break;
                case 7:
                case 9:
                    if (!preg_match($regex_79, $str, $hex))
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

            if ($r < 0 or $g < 0 or $b < 0 or $a < 0)
                return false;

            if ($r > 1 or $g > 1 or $b > 1 or $a > 1)
                return false;

            $this->red($r);
            $this->green($g);
            $this->blue($b);
            $this->alpha($a);

            return true;
        }

        private function interpret_keyword($str): bool {
            $const = 'self::CSS_COLOR_'.strtoupper($str);

            if (defined($const))
                return $this->interpret_hex(constant($const));

            return false;
        }
    }
