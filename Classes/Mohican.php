<?php
    class Mohican {
        private $name;

        public function __construct($n) {
            $this->name = $n;
            self::$lastMohican = $this;
        }

        public function __clone() {
            self::$lastMohican = $this;
        }

        public function __get($name) {
            return $this->$name;
        }

        public function __toString() {
            return sprintf("name: %s", $this->name);
        }

        public static $lastMohican;
    };

    $m1 = new Mohican("Armen");
    $m2 = new Mohican("Ashot");

    echo $m1.PHP_EOL;
    echo $m2.PHP_EOL;
    echo "Last - ".Mohican::$lastMohican.PHP_EOL;
?>