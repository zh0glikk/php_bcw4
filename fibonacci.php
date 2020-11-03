<?php
    function fibonacci($n) {
        if ( $n > 0 ) {
            if ( $n == 1 ) {
                return 1;
            }
            return fibonacci($n-1) + fibonacci($n-2);
        } else if ( $n < 0 ) {
            $sign = -1;
            
            if ( $n % 2 != 0 ) {
                $sign = 1;
            }
            
            return $sign * fibonacci(-n);
        }
        return 0;
    }
?>