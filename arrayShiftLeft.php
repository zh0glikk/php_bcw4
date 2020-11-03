<?php
    function arrayShiftLeft(&$array) {
        $last = count($array) - 1;
        $tmp = $array[0];
        
        for ( $i = 0; $i < $last; $i++ ) {
            $array[$i] = $array[$i+1];
        }
        $array[$last] = $tmp;
    }

    $array = array();
    $array[] = 1;
    $array[] = 2;
    $array[] = 3;
    $array[] = 4;
    $array[] = 5;

    arrayShiftLeft($array);

    print_r($array);
?>