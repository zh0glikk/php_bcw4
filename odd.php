<?php
    $value;

    fscanf(STDIN, "%d\n", $value);

    if ( $value % 2 == 0 ) {
        $value -= 1;
    }

    for ( $i = 1; $i < $value; $i += 2 ) {
        echo $i." ";
    }
    echo $value.PHP_EOL;
?>