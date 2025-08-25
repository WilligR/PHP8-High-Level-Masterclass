<?php

/*************************************************
 * Copyright (c) Reinhard Willig
 * Date: 14.08.2024
 * Time: 09:30
 *************************************************/

date_default_timezone_set('Europe/Berlin'); // Setze die Zeitzone auf Berlin
$date = getdate();
print "<pre>";
print_r($date);
print "</pre>";

echo "Es ist der " . $date["mday"] . "." . $date["mon"] . "." . $date["year"] . " und es ist " . $date["hours"] . ":" . $date["minutes"] . " Uhr.";
echo "<br>";
echo date("d. F Y H:i:s");
echo "<br>";

echo "Heute ist der " . date("d.m.Y") . " und es ist " . date("H:i:s") . " Uhr.";
echo "<br>";

$date = new DateTimeZone("Europe/Berlin");
echo "<br>";
$date = new DateTime("now", $date);
echo $date->format("d.m.Y H:i:s");
echo "<br>";

/*************************************************
 * Date: 14.08.2024
 * Time: 09:30
 *
 */
setlocale(LC_TIME, "de_DE.utf8");
$timestamp = time(); // Aktueller Timestamp
$formattedDate = strftime("%d.%m.%Y - %H:%M", $timestamp);
echo $formattedDate;

public IntlDateFormatter::format(IntlCalendar|DateTimeInterface|array|string|int|float $datetime): string|false