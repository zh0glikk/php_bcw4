<?php
    class Point {
        private $x;
        private $y;

        private function validate($value) {
            if ( is_numeric($value) ) {
                return $value;
            }
            throw new Exception("Invalid param");
        }

        public function __construct($x=0, $y=0) {
            $this->x = $this->validate($x);
            $this->y = $this->validate($y);
        }

        public function __get($name) {
            return $this->$name;
        }

        public function __set($name, $value) {
            $this->$name = $this->validate($value);
        }

        public function distance(Point $other) {
            if ( $other instanceof Point ) {
                return hypot($this->x - $other->x, $this->y - $other->y);
            }
            throw new Exception("Invalid param");
        }

        public function isEqual(Point $other) {
            if ( $other instanceof Point ) {
                return $this->x == $other->x && $this->y == $other->y;
            }
            throw new Exception("Invalid param");
        }

        public function __toString() {
            return sprintf("(%s, %s)", $this->x, $this->y);
        }
    }

    // $a = new Point();
    // $b = new Point(3, 4);
    // $c = new Point();

    // echo $a->distance($b).PHP_EOL;
    // if ( $a->isEqual($c) ) {
    //     echo "==".PHP_EOL;
    // }

    // echo $b.PHP_EOL;
?>