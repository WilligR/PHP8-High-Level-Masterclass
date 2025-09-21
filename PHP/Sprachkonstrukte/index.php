<!DOCTYPE html>
<html lang="de">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width-device-width, initial-scale=1.0">
   <title>Hello World</title>
   <link rel="stylesheet" type="text/css" href="">
</head>
<body>
<h1>Sprachkontrukte</h1>
<?php
$text = <<<TEXT
<h1>Heredoc</h1>
Hallo, was geht ab?
   <br>
   Wie geht's?
TEXT;
echo $text;

/* Nowdoc*/
$text2 = <<<'TEXT2'
<h1>Nowdoc</h1>
Was ist sonst noch los?
   
TEXT2;
echo $text2;

/* printf*/
printf("<br>Hallo mein Name ist %s und ich bin %d Jahre alt.<br>", "Max", 25);

/* printr */
$array = ["Apfel", "Banane", "Kirsche"];
echo "<pre>";
print_r($array);
echo "</pre>";

/* var_dump*/
$integer = 42;
$string = "Hallo Welt";
$float = 3.14;
$array2 = [1, 2, 3, 4, 5];
$object = (object) $array;

echo "<pre>";
var_dump($array);

/* var_export */
$value = var_export($array2, true);
echo $value;
echo "</pre>";

?>



</body>
</html>
    
 
 