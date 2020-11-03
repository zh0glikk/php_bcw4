<?php
    function arrayPrint($out, $array) {
        $last = (count($array) - 1);
        $result = "";

        $result = implode(" ", $array).PHP_EOL;
        
        fwrite($out, $result);
    }

    $array = array();

    $array[] = "apple";
    $array[] = "tomato";
    $array[] = "blackberry";

    $out = fopen("task.out", "w");
    arrayPrint($out, $array);
?>