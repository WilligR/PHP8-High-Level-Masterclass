<?php
/*************************************************
 * Copyright (c) Reinhard Willig
 * Date: 22.09.2025
 * Time: 12:24
 *************************************************/

class User
{
   const AGE = 30;
   public static $name = 'Reinhard';

   public static function greets()
   {
      return "Hello " . self::$name;
   }
}

;

class Hobby extends User
{
   public static function cooking()
   {
      return parent::$name;
   }
}

;
echo User::greets(); // Hello Reinhard
echo "<br>";
echo User::$name;    // Reinhard
echo "<br>";
echo User::AGE . "<br>";      // 30

echo Hobby::cooking(); // Reinhard
