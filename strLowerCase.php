<?php
    function strLowerCase($string) {
        $from = range('A','Z');
        $to = range('a','z');
        return str_replace($from, $to, $string);
    }

    $str = "ABCDE";

    echo strLowerCase($str).PHP_EOL;
?>