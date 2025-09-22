<?php
/*************************************************
 * Copyright (c) Reinhard Willig
 * Date: 22.09.2025
 * Time: 11:05
 *************************************************/
 
$a = 5;
$b = 6;

// Ternärer Operator
$max = ($a > $b) ? $a : $b;
echo "Der größere Wert ist: $max<br>";
// Verschachtelter ternärer Operator
$note = 85;
$bewertung = ($note >= 90) ? 'Sehr gut' :
              (($note >= 75) ? 'Gut' :
              (($note >= 50) ? 'Befriedigend' : 'Ungenügend'));
echo "Die Bewertung ist: $bewertung<br>";
