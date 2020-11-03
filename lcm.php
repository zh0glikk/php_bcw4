<?php
    function gcd($a, $b) {
        if ( $b == 0 ) {
            return $a;
        }
        return gcd($b, $a%$b);
    }

    $in = fopen("task.in", "r");
    $out = fopen("task.out", "w");

    $contents = explode(" ",fread($in, filesize("task.in")));
    $a = $contents[0];
    $b = $contents[1];

    $lcm = ($a / gcd($a, $b)) * $b;

    fwrite($out, $lcm);

    fclose($in);
    fclose($out);
?>