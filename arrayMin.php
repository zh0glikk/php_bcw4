<?php
    function arrayMin($array) {
        $min = $array[0];
        for ( $i = 1; $i < count($array); $i++ ) {
            if ( $array[$i] < $min ) {
                $min = $array[$i];
            }
        }
        return $min;
    }

    $array = array();
    $array[] = 8;
    $array[] = 5;
    $array[] = 3;
    $array[] = 1;
    $array[] = 6;

    echo "Min: ".arrayMin($array).PHP_EOL;
?>