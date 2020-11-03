<?php
    function arrayReverse(&$array) {
        for ( $i = 0, $j = count($array) - 1; $i < $j; $i++, $j-- ) {
            $tmp = $array[$i];
            
            $array[$i] = $array[$j];
            $array[$j] = $tmp;
        }
    }

    $array = array();
    $array[] = 1;
    $array[] = 2;
    $array[] = 3;
    $array[] = 4;
    $array[] = 5;

    arrayReverse($array);

    print_r($array);
?>