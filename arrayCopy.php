<?php
    function arrayCopy(&$destination, &$source) {
        for ( $i = 0; $i < count($source); $i++ ) {
            $destination[$i] = $source[$i];
        }
    }

    $array = array();
    $array[] = 1;
    $array[] = 2;
    $array[] = 3;

    $copiedArray = array();

    arrayCopy($copiedArray, $array);

    print_r($copiedArray);

?>