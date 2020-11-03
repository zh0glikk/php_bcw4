<?php
    $value;
    
    fscanf(STDIN, "%d\n", $value);
    
    for ( $i = 1; $i < $value; $i++ ) {
        echo $i." ";
    }
    echo $value.PHP_EOL;
?>