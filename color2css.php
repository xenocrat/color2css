<?php
    class color2css {
        const COLOR2CSS_VERSION_MAJOR        = 0;
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

        private $r                           = 0;
        private $g                           = 0;
        private $b                           = 0;
        private $h                           = 0;
        private $s                           = 0.0;
        private $l                           = 0.0;
        private $a                           = 1.0;

        public function __construct($color = "transparent") {
            $args = func_get_args();

            if (count($args) < 2)
                return $this->interpret($color);

            if (count($args) < 3)
                throw new Exception("Missing arguments in call to color constructor.");

            if (is_float($args[1])) {
                $this->hue($args[0]);
                $this->saturation($args[1]);
                $this->lightness($args[2]);
            }

            if (is_int($args[1])) {
                $this->red($args[0]);
                $this->green($args[1]);
                $this->blue($args[2]);
            }

            if (count($args) == 4)
                $this->alpha($args[3]);
        }

        public function hex($str = null) {
            if (isset($str))
                return $this->interpret_hex($str);

            $r = str_pad(dechex($this->r), 2, "0", STR_PAD_LEFT);
            $g = str_pad(dechex($this->g), 2, "0", STR_PAD_LEFT);
            $b = str_pad(dechex($this->b), 2, "0", STR_PAD_LEFT);

            return "#".$r.$g.$b;
        }

        public function rgb($str = null) {
            if (isset($str))
                return $this->interpret_rgb($str);

            $r = $this->r;
            $g = $this->g;
            $b = $this->b;

            return "rgb(".$r.", ".$g.", ".$b.")";
        }

        public function hsl($str = null) {
            if (isset($str))
                return $this->interpret_hsl($str);

            $h = $this->h;
            $s = (int) round($this->s * 100);
            $l = (int) round($this->l * 100);

            return "hsl(".$h.", ".$s."%, ".$l."%)";
        }

        public function hexa($str = null) {
            if (isset($str))
                return $this->interpret_hex($str);

            $r = str_pad(dechex($this->r), 2, "0", STR_PAD_LEFT);
            $g = str_pad(dechex($this->g), 2, "0", STR_PAD_LEFT);
            $b = str_pad(dechex($this->b), 2, "0", STR_PAD_LEFT);
            $a = (int) round($this->a * 255);
            $a = str_pad(dechex($a), 2, "0", STR_PAD_LEFT);

            return "#".$r.$g.$b.$a;
        }

        public function rgba($str = null) {
            if (isset($str))
                return $this->interpret_rgb($str);

            $r = $this->r;
            $g = $this->g;
            $b = $this->b;
            $a = round($this->a, 2);
            $a = ($a == 1.00 or $a == 0.00) ? (int) $a : number_format($this->a, 2) ;

            return "rgba(".$r.", ".$g.", ".$b.", ".$a.")";
        }

        public function hsla($str = null) {
            if (isset($str))
                return $this->interpret_hsl($str);

            $h = $this->h;
            $s = (int) round($this->s * 100);
            $l = (int) round($this->l * 100);
            $a = round($this->a, 2);
            $a = ($a == 1.00 or $a == 0.00) ? (int) $a : number_format($this->a, 2) ;

            return "hsla(".$h.", ".$s."%, ".$l."%, ".$a.")";
        }

        public function red($r = null) {
            if (!isset($r))
                return $this->r;

            if (!is_int($r) or $r < 0 or $r > 255)
                throw new Exception("Red value must be an integer in the range 0-255.");

            $this->r = $r;
            $this->rgb2hsl();

            return true;
        }

        public function green($g = null) {
            if (!isset($g))
                return $this->g;

            if (!is_int($g) or $g < 0 or $g > 255)
                throw new Exception("Green value must be an integer in the range 0-255.");

            $this->g = $g;
            $this->rgb2hsl();

            return true;
        }

        public function blue($b = null) {
            if (!isset($b))
                return $this->b;

            if (!is_int($b) or $b < 0 or $b > 255)
                throw new Exception("Blue value must be an integer in the range 0-255.");

            $this->b = $b;
            $this->rgb2hsl();

            return true;
        }

        public function hue($h = null) {
            if (!isset($h))
                return $this->h;

            if (!is_int($h))
                throw new Exception("Hue value must be an integer.");

            if ($h > 360)
                $h = $h % 360;

            while ($h < 0)
                $h = $h + 360;

            $this->h = $h;
            $this->hsl2rgb();

            return true;
        }

        public function saturation($s = null) {
            if (!isset($s))
                return $this->s;

            if (!is_float($s) or $s < 0 or $s > 1)
                throw new Exception("Saturation value must be a float in the range 0-1.");

            $this->s = $s;
            $this->hsl2rgb();

            return true;
        }

        public function lightness($l = null) {
            if (!isset($l))
                return $this->l;

            if (!is_float($l) or $l < 0 or $l > 1)
                throw new Exception("Lightness value must be a float in the range 0-1.");

            $this->l = $l;
            $this->hsl2rgb();

            return true;
        }

        public function alpha($a = null) {
            if (!isset($a))
                return $this->a;

            if (!is_float($a) or $a < 0 or $a > 1)
                throw new Exception("Alpha value must be a float in the range 0-1.");

            $this->a = $a;

            return true;
        }

        private function rgb2hsl() {
            $r = $this->r / 255;
            $g = $this->g / 255;
            $b = $this->b / 255;

            $max = max($r, $g, $b);
            $min = min($r, $g, $b);

            $c = $max - $min;

            $l = ($max + $min) / 2;
            $s = ($l == 0 or $l == 1) ? 0 : $c / (1 - abs((2 * $l) - 1)) ;

            switch ($max) {
                case $r:
                    $h = ($c == 0) ? 0 : 60 * ($g - $b) / $c ;
                    break;
                case $g:
                    $h = ($c == 0) ? 0 : 60 * ((($b - $r) / $c) + 2) ;
                    break;
                case $b:
                    $h = ($c == 0) ? 0 : 60 * ((($r - $g) / $c) + 4) ;
                    break;
            }

            if ($h > 360)
                $h = $h % 360;

            while ($h < 0)
                $h = $h + 360;

            $this->h = (int) $h;
            $this->s = (float) $s;
            $this->l = (float) $l;
        }

        private function hsl2rgb() {
            $h = $this->h / 360;
            $s = $this->s;
            $l = $this->l;

            $m2 = ($l <= 0.5) ? $l * ($s + 1) : ($l + $s) - ($l * $s) ;
            $m1 = ($l * 2) - $m2;

            $r = $this->hue2rgb($m1, $m2, $h + (1 / 3));
            $g = $this->hue2rgb($m1, $m2, $h);
            $b = $this->hue2rgb($m1, $m2, $h - (1 / 3));

            $this->r = (int) round($r * 255);
            $this->g = (int) round($g * 255);
            $this->b = (int) round($b * 255);

        }

        private function hue2rgb($m1, $m2, $h) {
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

        private function interpret($color) {
            if (!is_string($color))
                throw new Exception("Expected string in call to color constructor.");

            if (!isset($success) and preg_match("/^rgba?\(/", $color))
                $success = $this->interpret_rgb($color);

            if (!isset($success) and preg_match("/^hsla?\(/", $color))
                $success = $this->interpret_hsl($color);

            if (!isset($success) and preg_match("/^#[0-9a-f]{3,8}/", $color))
                $success = $this->interpret_hex($color);

            if (!isset($success) and preg_match("/^[a-z]+/i", $color))
                $success = $this->interpret_keyword($color);

            if (!isset($success) or !$success)
                throw new Exception("Invalid string supplied to color constructor.");
        }

        private function interpret_rgb($str) {
            if (!preg_match("/^rgba?\(([0-9]+%?)[, ]+([0-9]+%?)[, ]+([0-9]+%?)([, \/]+[\.0-9]+%?)?\)/", $str, $rgb))
                return false;

            $a = $this->a;

            for ($i = 1; $i < count($rgb) ; $i++) { 
                $val = trim($rgb[$i], ", /");

                switch ($i) {
                    case 1:
                        $r = (int) (strpos($val, "%") ? (int) $val * 2.55 : $val);
                        break;
                    case 2:
                        $g = (int) (strpos($val, "%") ? (int) $val * 2.55 : $val);
                        break;
                    case 3:
                        $b = (int) (strpos($val, "%") ? (int) $val * 2.55 : $val);
                        break;
                    case 4:
                        $a = (float) (strpos($val, "%") ? (int) $val / 100 :  $val);
                        break;
                }
            }

            if ($r < 0 or $g < 0 or $b < 0 or $a < 0)
                return false;

            if ($r > 255 or $g > 255 or $b > 255 or $a > 1)
                return false;

            $this->red($r);
            $this->green($g);
            $this->blue($b);
            $this->alpha($a);

            return true; 
        }

        private function interpret_hsl($str) {
            if (!preg_match("/^hsla?\(([0-9]+)[, ]+([0-9]+%)[, ]+([0-9]+%)([, \/]+[\.0-9]+%?)?\)/", $str, $hsl))
                return false;

            $a = $this->a;

            for ($i = 1; $i < count($hsl) ; $i++) { 
                $val = trim($hsl[$i], ", /");

                switch ($i) {
                    case 1:
                        $h = (int) $val;
                        break;
                    case 2:
                        $s = (float) ((int) $val / 100);
                        break;
                    case 3:
                        $l = (float) ((int) $val / 100);
                        break;
                    case 4:
                        $a = (float) (strpos($val, "%") ? (int) $val / 100 : $val);
                        break;
                }
            }

            if ($h < 0 or $s < 0 or $l < 0 or $a < 0)
                return false;

            if ($s > 1 or $l > 1 or $a > 1)
                return false;

            $this->hue($h);
            $this->saturation($s);
            $this->lightness($l);
            $this->alpha($a);

            return true; 
        }

        private function interpret_hex($str) {
            switch (strlen($str)) {
                case 4:
                case 5:
                    if (!preg_match("/^#([0-9a-f])([0-9a-f])([0-9a-f])([0-9a-f])?/i", $str, $hex))
                        return false;

                    break;

                case 7:
                case 9:
                    if (!preg_match("/^#([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})?/i", $str, $hex))
                        return false;

                    break;

                default:
                    return false;
            }

            $a = $this->a;

            for ($i = 1; $i < count($hex) ; $i++) { 
                if (strlen($hex[$i]) < 2)
                    $hex[$i] = $hex[$i].$hex[$i];

                $dec = hexdec($hex[$i]);

                switch ($i) {
                    case 1:
                        $r = (int) $dec;
                        break;
                    case 2:
                        $g = (int) $dec;
                        break;
                    case 3:
                        $b = (int) $dec;
                        break;
                    case 4:
                        $a = (float) ((int) $dec / 255);
                        break;
                }
            }

            if ($r < 0 or $g < 0 or $b < 0 or $a < 0)
                return false;

            if ($r > 255 or $g > 255 or $b > 255 or $a > 1)
                return false;

            $this->red($r);
            $this->green($g);
            $this->blue($b);
            $this->alpha($a);

            return true;    
        }

        private function interpret_keyword($str) {
            $const = 'self::CSS_COLOR_'.strtoupper($str);

            if (defined($const))
                return $this->interpret_hex(constant($const));

            return false;
        }
    }
