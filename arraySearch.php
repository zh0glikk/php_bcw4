<?php
    function arraySearch($array, $needle) {
        for ( $i = 0; $i < count($array); $i++ ) {
            if ( $array[$i] == $needle) {
                return $i;
            }
        }
        return -1;
    }

    $array = array();
    $array[] = 8;
    $array[] = 5;
    $array[] = 3;
    $array[] = 1;
    $array[] = 6;

    echo "Index: ".arraySearch($array, 7).PHP_EOL;
?>