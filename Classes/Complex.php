<?php
    class Complex {
        private $real;
        private $imaginary;

        private function validate($value) {
            if ( is_numeric($value) ) {
                return $value;
            }
            throw new Exception("Invalid param");
        }

        public function __construct($real=0, $imaginary=0) {
            $this->real = $this->validate($real);
            $this->imaginary = $this->validate($imaginary);
        }

        public function __get($name) {
            return $this->$name;
        }

        public function __set($name, $value) {
            $this->$name = $this->validate($value);
        }

        public function isEqual(Complex $other) {
            if ( $other instanceof Complex ) {
                return $this->real == $other->real && $this->imaginary == $other->imaginary;
            }
            throw new Exception("Invalid param");
        }

        public function isNotEqual(Complex $other) {
            if ( $other instanceof Complex ) {
                return $this->real != $other->real || $this->imaginary != $other->imaginary;
            }
            throw new Exception("Invalid param");
        }

        public function add(Complex $other) {
            if ( $other instanceof Complex ) {
                $this->real += $other->real;
                $this->imaginary += $other->imaginary;
                return;
            }
            throw new Exception("Invalid param");
        }

        public function sub(Complex $other) {
            if ( $other instanceof Complex ) {
                $this->real -= $other->real;
                $this->imaginary -= $other->imaginary;
                return;
            }
            throw new Exception("Invalid param");
        }

        public function mult(Complex $other) {
            if ( $other instanceof Complex ) {
                $result = new Complex();
                $result->real = $this->real * $other->real - $this->imaginary * $other->imaginary;
                $result->imaginary = $this->real * $other->imaginary + $this->imaginary * $other->real;

                $this->x = $result->x;
                $this->y = $result->y;
            }
            throw new Exception("Invalid param");
        }

        public function __toString() {
            if ( $this->imaginary < 0 ) {
                return sprintf("%s%si", $this->real, $this->imaginary);
            }
            return sprintf("%s+%si", $this->real, $this->imaginary);
        }
    }

    $c1 = new Complex(2, -1);
    $c2 = new Complex(1, 2);

    echo "c1=".$c1.PHP_EOL;
    echo "c2=".$c2.PHP_EOL;

    if ( $c1->isNotEqual($c2) ) {
        echo "c1!=c2".PHP_EOL;
    } else if ( $c1->isEqual($c2) ) {
        echo "==".PHP_EOL;
    }

    $c1->add($c2);
    echo "c1=".$c1.PHP_EOL;

    $c1->sub($c2);
    echo "c1=".$c1.PHP_EOL;
?>