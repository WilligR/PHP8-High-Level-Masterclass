<?php
/*************************************************
 * Copyright (c) Reinhard Willig
 * Date: 04.06.2025
 * Time: 12:42
 *************************************************/

function generatePassword($length = 12) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:,.<>?';
    $password = '';
    $max = strlen($characters) - 1;

    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[random_int(0, $max)];
    }

    return $password;
}

// Beispiel: Generiere ein 16-stelliges Passwort
echo generatePassword(12);
// Ausgabe: Ein zufälliges 16-stelliges Passwort
// Hinweis: Die Funktion random_int() ist sicherer als mt_rand() und sollte bevorzugt verwendet werden.
// Hinweis: Die Funktion random_int() ist in PHP 7.0 und höher verfügbar.
// Hinweis: Die Funktion random_int() verwendet einen kryptografisch sicheren Zufallszahlengenerator.
// Hinweis: Die Funktion random_int() kann in älteren PHP-Versionen nicht verfügbar sein. In diesem Fall sollte eine alternative Methode verwendet werden, um sichere Zufallszahlen zu generieren.
// Hinweis: Die Funktion random_int() kann in einigen Umgebungen (z.B. Webserver) langsamer sein als mt_rand(). In diesem Fall sollte die Leistung der Funktion getestet werden, um sicherzustellen, dass sie für die Anwendung geeignet ist.
// Hinweis: Die Funktion random_int() kann in einigen Umgebungen (z.B. Webserver) langsamer sein als mt_rand(). In diesem Fall sollte die Leistung der Funktion getestet werden, um sicherzustellen, dass sie für die Anwendung geeignet ist.
