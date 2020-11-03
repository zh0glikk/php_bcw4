<?php
    function strRot13(&$str) {
        $shift = 13;
        
        for ( $i = 0; $i < count($str); $i++ ) {
            $current = ord($str[$i]);
            
            if ( $current >= ord('a') ) {
                if ( $current < ord('n') ) {
                    $current += $shift;
                } else if ( $current <= ord('z') ) {
                    $current -= $shift;
                }
            } else if ( $current >= ord('A') ) {
                if ( $current < ord('N') ) {
                    $current += $shift;
                } else if ( $current <= ord('Z') ) {
                    $current -= $shift;
                }
            }
            $str[$i] = chr($current);
        }
    }

    $array = array();
    $array[] = 'a';
    $array[] = 'b';
    $array[] = 'c';
    $array[] = 'd';
    $array[] = 'e';

    strRot13($array);

    print_r($array);
?>