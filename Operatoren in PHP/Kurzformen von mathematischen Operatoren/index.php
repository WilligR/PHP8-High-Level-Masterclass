<?php
/*************************************************
 * Copyright (c) Reinhard Willig
 * Date: 21.09.2025
 * Time: 16:01
 *************************************************/

$a = 5;

// Addition
$a += 3; // $a = $a + 3;
echo $a . "<br>"; // 8

// Substraktion
$a -= 2; // $a = $a - 2;
echo $a . "<br>"; // 6

// Multiplikation
$a *= 4; // $a = $a * 4;
echo $a . "<br>"; // 24

// Division
$a /= 3; // $a = $a / 3;
echo $a . "<br>"; // 8

// Modulo
$a %= 5; // $a = $a % 5;
echo $a . "<br>"; // 3

// Exponentiation
$a **= 3; // $a = $a ** 3;
echo $a . "<br>"; // 27

// Inkrement und Dekrement
$a++; // $a = $a + 1;
echo $a . "<br>"; // 28
$a--; // $a = $a - 1;
echo $a . "<br>"; // 27
++$a; // $a = $a + 1;
echo $a . "<br>"; // 28
--$a; // $a = $a - 1;
echo $a . "<br>"; // 27

// Prä-Increment
$a =5;
$b = ++$a; // $a = $a + 1; $b = $a;
echo $a . "<br>"; // 6
echo $b . "<br>"; // 6

// Post-Increment
$a =5;
$b = $a++; // $b = $a; $a = $a +
echo $a . "<br>"; // 6
echo $b . "<br>"; // 5
