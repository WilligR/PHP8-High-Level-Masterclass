<?php
/*************************************************
 * Copyright (c) Reinhard Willig
 * Date: 22.09.2025
 * Time: 12:10
 *************************************************/

$a = 5;
$b = 10;

echo $a <=> $b; // -1
echo "<br>";
echo $b <=> $a; // 1
echo "<br>";
echo $a <=> $a; // 0
echo "<br>";

$zahlen = [5, 2, 7, 9, 8];

usort($zahlen, function ($a, $b) {
    return $a <=> $b;
});
echo "<pre>";
print_r($zahlen);
echo "</pre>";