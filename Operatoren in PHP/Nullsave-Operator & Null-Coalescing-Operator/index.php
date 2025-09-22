<?php
/*************************************************
 * Copyright (c) Reinhard Willig
 * Date: 22.09.2025
 * Time: 11:14
 *************************************************/

class Benutzer
{
    public $profil;

    public function __construct($profil = null)
    {
        $this->profil = $profil;
    }
}

class Profil
{
    public $name;

    public function __construct($name = null)
    {
        $this->name = $name;
    }
}

$benutzer = new Benutzer(new Profil(null));
echo $benutzer?->profil?->name ?? "Standardname"; // Ausgabe: Standardname
// Ohne Nullsafe-Operator würde ein Fehler auftreten, wenn $benutzer oder $benutzer->profil null ist.
// Ohne Null-Coalescing-Operator würde ein Fehler auftreten, wenn $benutzer->profil->name null ist.

