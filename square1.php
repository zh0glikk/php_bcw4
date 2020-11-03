<?php
    $size;
    
    fscanf(STDIN, "%d\n", $size);
    
    for ( $row = 0; $row < $size; $row++ ) {
        for ( $column = 1; $column < $size; $column++ ) {
            echo $column." ";
        }
        echo $size.PHP_EOL;
    }
    
?>