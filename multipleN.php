<?php
    $value;
    $divisor;

    fscanf(STDIN, "%d %d\n", $value, $divisor);

    if ( $value % $divisor != 0 ) {
        $value -= $value % $divisor;
    }

    for ( $i = 0; $i < $value; $i += $divisor ) {
        echo $i." ";
    }
    echo $value.PHP_EOL;
?>