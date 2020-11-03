<?php
    class Countable_ {
        public static $amount = 0;

        public function __construct() {
            self::$amount += 1;
        }

        public function __clone() {
            self::$amount += 1;
        }
    }

    $c1 = new Countable_();
    $c2 = new Countable_();
    $c3 = new Countable_();

    echo Countable_::$amount.PHP_EOL;

    $c4 = clone $c3;

    echo Countable_::$amount.PHP_EOL;
?>