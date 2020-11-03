<?php
    function arrayShiftRight(&$array) {
        $last = count($array) - 1;
        $tmp = $array[$last];
        
        for ( $i = $last; $i > 0; $i-- ) {
            $array[$i] = $array[$i-1];
        }
        $array[0] = $tmp;
    }

    $array = array();
    $array[] = 1;
    $array[] = 2;
    $array[] = 3;
    $array[] = 4;
    $array[] = 5;

    arrayShiftRight($array);

    print_r($array);
?>