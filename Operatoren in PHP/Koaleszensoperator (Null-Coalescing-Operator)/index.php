<?php
/*************************************************
 * Copyright (c) Reinhard Willig
 * Date: 22.09.2025
 * Time: 12:27
 *************************************************/
 
 $var = null;
 $result = $var ?? 'Standardwert';
 echo $result."<br>"; // Ausgabe: Standardwert

   $var2 = null;
   $var3="Hallo Welt";
   $result2 = $var2 ?? $var3 ?? 'Standardwert';
   echo "\n".$result2; // Ausgabe: Hallo Welt
