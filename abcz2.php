<?php
    $number;
    $state = false;
    
    fscanf(STDIN, "%d\n", $number);
    
    if ( $number % 2 == 0 ) {
        echo "alpha".PHP_EOL;
        $state = true;
    }
    if ( $number % 3 == 0 ) {
        echo "bravo".PHP_EOL;
        $state = true;
    }
    if ( $number % 5 == 0 ) {
        echo "charlie".PHP_EOL;
        $state = true;
    }
    if ( $state == false ) {
        echo "zulu".PHP_EOL;
    }
?>