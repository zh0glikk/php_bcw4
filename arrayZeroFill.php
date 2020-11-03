<?php
    function arrayZeroFill(&$array) {
        for ( $index = 0; $index < count($array); $index++ ) {
            $array[$index] = 0;
        }
    }

    $array = array();
    $array[] = 1;
    $array[] = 2;
    $array[] = 3;

    arrayZeroFill($array);

    print_r($array);
?>