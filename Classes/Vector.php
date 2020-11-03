<?php
    class Vector {
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

        public function len() {
            return hypot($this->x, $this->y);
        }

        public function isEqual(Vector $other) {
            if ( $other instanceof Vector ) {
                return $this->x == $other->x && $this->y == $other->y;
            }
            throw new Exception("Invalid param");
        }
        public function isNotEqual(Vector $other) {
            if ( $other instanceof Vector ) {
                return $this->x != $other->x || $this->y != $other->y;
            }
            throw new Exception("Invalid param");
        }

        public function add(Vector $other) {
            $this->x += $other->x;
            $this->y += $other->y;
        }

        public function sub(Vector $other) {
            $this->x -= $other->x;
            $this->y -= $other->y;
        }

        public function __toString() {
            return sprintf("(%s, %s)", $this->x, $this->y);
        }
    }

    $a = new Vector(3, 4);
    $b = new Vector(6, 8);

    echo "a=".$a.PHP_EOL;
    echo "b=".$b.PHP_EOL;

    if ( $a->isEqual($b) ) {
        echo "a==b".PHP_EOL;
    } else if ( $a->isNotEqual($b) ) {
        echo "a!=b".PHP_EOL;
    }

    $a->add($b);
    echo "a+b=".$a.PHP_EOL;
?>