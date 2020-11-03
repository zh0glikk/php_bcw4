<?php
    $value;
    $divisor = 5;

    fscanf(STDIN, "%d\n", $value);

    if ( $value % $divisor != 0 ) {
        $value -= $value % $divisor;
    }

    for ( $i = 0; $i < $value; $i += $divisor ) {
        echo $i." ";
    }
    echo $value.PHP_EOL;
?>