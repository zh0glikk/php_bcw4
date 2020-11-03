<?php
    function arrayExchange(&$array) {
        for ( $i = 0; $i + 1 < count($array); $i += 2 ) {
            $tmp = $array[$i];
            
            $array[$i] = $array[$i+1];
            $array[$i+1] = $tmp;
        }
    }

    $array = array();
    $array[] = 1;
    $array[] = 2;
    $array[] = 3;
    $array[] = 4;
    $array[] = 5;

    arrayExchange($array);

    print_r($array);
?>