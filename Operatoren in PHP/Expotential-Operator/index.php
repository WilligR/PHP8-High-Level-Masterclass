<?php
/*************************************************
 * Copyright (c) Reinhard Willig
 * Date: 21.09.2025
 * Time: 16:23
 *************************************************/
 
$base = 2;
$exp = 3;
$result = $base ** $exp; // 2 hoch 3
echo $result . "<br>"; // 8

// Quadratzahlen
$zahl = 4;
$quadrat = $zahl ** 2; // 4 hoch 2
echo $quadrat . "<br>"; // 16

// Kubikzahlen
$zahl = 3;
$kubik = $zahl ** 3; // 3 hoch 3
echo $kubik . "<br>"; // 27
// Vierte Potenz
$zahl = 2;
$viertePotenz = $zahl ** 4; // 2 hoch 4
echo $viertePotenz . "<br>"; // 16

// Exponentiation mit negativen Exponenten
$zahl = 2;
$negativerExp = $zahl ** -2; // 2 hoch -2
echo $negativerExp . "<br>"; // 0.25

// Exponentiation mit Bruchzahlen
$zahl = 9;
$bruchExp = $zahl ** 0.5; // 9 hoch 0.5
echo $bruchExp . "<br>"; // 3

// Exponentiation mit großen Zahlen
$zahl = 10;
$grosseZahl = $zahl ** 10; // 10 hoch 10
echo $grosseZahl . "<br>"; // 10000000000

// Kombination mit anderen mathematischen Operationen
$zahl1 = 2;
$zahl2 = 3;
$kombination = ($zahl1 + $zahl2) ** 2; // (2 + 3) hoch 2
echo $kombination . "<br>"; // 25

// Wurzel
$zahl = 16;
$wurzel = $zahl ** (1/2); // 16 hoch 1/
echo $wurzel . "<br>"; // 4
// Dritte Wurzel
$zahl = 27;
$dritteWurzel = $zahl ** (1/3); // 27 hoch 1/3
echo $dritteWurzel . "<br>"; // 3


