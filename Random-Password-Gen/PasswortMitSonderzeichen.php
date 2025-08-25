<?php
/*************************************************
 * Copyright (c) Reinhard Willig
 * Date: 04.06.2025
 * Time: 12:52
 *************************************************/

function generatePassword($length = 10, $specialCharCount = 2)
{
    $lettersNumbers = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
//    $specialChars = '!@#$%^&*()_+-=[]{}|;:,.<>?';
    $specialChars = '!@#$%&*()+=?';

    $password = '';

    // Zufällige Sonderzeichen hinzufügen
    for ($i = 0; $i < $specialCharCount; $i++) {
        $password .= $specialChars[random_int(0, strlen($specialChars) - 1)];
    }

    // Restliche Zeichen auffüllen
    for ($i = 0; $i < ($length - $specialCharCount); $i++) {
        $password .= $lettersNumbers[random_int(0, strlen($lettersNumbers) - 1)];
    }

    // Zeichen zufällig mischen
    $password = str_shuffle($password);

    return $password;
}

// Beispiel: Generiere ein 16-stelliges Passwort mit 4 Sonderzeichen
echo generatePassword(10, 4);


 