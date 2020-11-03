<?php
    $a = fgets(STDIN);
    $b = fgets(STDIN);
    $c = fgets(STDIN);
    $d = fgets(STDIN);
    $e = fgetc(STDIN);

    $max_1 = $a;
    $max_2 = $c;
    $max = $e;
    if ( $b > $max_1 ) {
        $max_1 = $b;
    }
    if ( $d > $max_2 ) {
        $max_2 = $d;
    }
    if ( $max_1 > $max) {
        $max = $max_1;
    }
    if ( $max_2 > $max ) {
        $max = $max_2;
    }

    echo $max;
?>