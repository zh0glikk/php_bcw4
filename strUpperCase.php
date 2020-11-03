<?php
    function strUpperCase(&$string) {
        $from = range('a','z');
        $to = range('A','Z');
        return str_replace($from, $to, $string);
    }

    $str = "abcde";

    echo strUpperCase($str).PHP_EOL;
?>