<?php
    function strLength(&$str) {
        $length = 0;
        
         while (isset($str[$length])){
            $length++;
        }
        return $length-1;
    }

    $in = fopen("task.in", "r");
    $out = fopen("task.out", "w");

    $string = array();
    $string = fread($in, filesize("task.in"));

    fwrite($out, strLength($string).PHP_EOL);
    
    fclose($in);
    fclose($out);
?>