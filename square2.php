<?php
    $size;
    
    fscanf(STDIN, "%d\n", $size);

    for ( $row = 0, $counter = 1; $row < $size; $row++, $counter += 1 ) {
        for ( $col = 1; $col < $size; $col++, $counter += 1 ) {
            echo $counter." ";
        }
        echo $counter.PHP_EOL;
    }

?>