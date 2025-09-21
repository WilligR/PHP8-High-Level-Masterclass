<?php

function addOne(&$num){
   $num++;
}
$zahl = 5;
addOne($zahl);

echo "<h1>$zahl</h1>";
