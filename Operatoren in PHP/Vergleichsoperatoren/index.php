<?php
/*************************************************
 * Copyright (c) Reinhard Willig
 * Date: 22.09.2025
 * Time: 10:41
 *************************************************/
$a = 5;
$b = '5';

$gleich = ($a == $b); // true, da nur Wert verglichen wird
$identisch = ($a === $b); // false, da auch der Typ verglichen wird
$ungleich = ($a != $b); // false, da nur Wert verglichen wird
$nicht_identisch = ($a !== $b); // true, da auch der Typ verglichen wird
$kleiner = ($a < $b); // false
$kleiner_gleich = ($a <= $b); // true
$groesser = ($a > $b); // false
$groesser_gleich = ($a >= $b); // true
$spaceship = ($a <=> $b); // 0, da beide gleich sind
// $a < $b => -1
// $a == $b => 0
// $a > $b => 1
echo "<pre>";
var_dump(
   $gleich,
   $identisch,
   $ungleich,
   $nicht_identisch,
   $kleiner,
   $kleiner_gleich,
   $groesser,
   $groesser_gleich,
   $spaceship
);
echo "</pre>";
