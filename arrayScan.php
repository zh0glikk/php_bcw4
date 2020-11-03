<?php
    function arrayScan($in, $fileName, $array) {
        $array = explode(" ",fread($in, filesize($fileName)));

        return $array;
    }

    $fileName = "task.in";
    $in = fopen($fileName, "r");
    $out = fopen("task.out", "w");

    $array = array();
    $array = arrayScan($in, $fileName, $array);
    fwrite($out, implode(" ", $array));

    fclose($in);
    fclose($out);
?>