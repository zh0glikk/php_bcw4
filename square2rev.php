<?php
    $size;
    $counter;
    
    fscanf(STDIN, "%d\n", $size);

    $counter = $size * $size - $size + 1;

    for ( $i = 0; $i < $size; $i++, $counter -= $size ) {
        for ( $j = 1; $j < $size; $j++, $counter++ ) {
            echo $counter." ";
        }
        echo $counter.PHP_EOL;
        $counter -= $size - 1;
    }
?>