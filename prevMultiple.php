<?php
    $value;
    $divisor;

    fscanf(STDIN, "%d %d\n", $value, $divisor);

    if ( $divisor < 0 ) {
        $divisor *= -1;
    }

    if ( $value % $divisor != 0 ) {
        $value -= $value % $divisor;
        if ( $value < 0 ) {
            $value -= $divisor;
        }
    }

    echo $value.PHP_EOL;
?>