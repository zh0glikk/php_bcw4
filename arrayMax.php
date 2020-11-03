<?php
    function arrayMax($array) {
        $max = $array[0];
        for ( $i = 1; $i < count($array); $i++ ) {
            if ( $array[$i] > $max ) {
                $max = $array[$i];
            }
        }
        return $max;
    }

    $array = array();
    $array[] = 1;
    $array[] = 5;
    $array[] = 3;
    $array[] = 4;
    $array[] = 6;

    echo "Max: ".arrayMax($array).PHP_EOL;
?>