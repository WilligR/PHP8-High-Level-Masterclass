<?php
/*************************************************
 * Copyright (c) Reinhard Willig
 * Date: 07.08.2024
 * Time: 10:33
 *************************************************/

$ok = true;
$errormsg = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["send-login"])) {
        $username = trim($_POST["username"]);
        $email = trim($_POST["email"]);
        $age = (int)trim($_POST["age"]);
        $password = trim($_POST["password"]);

        switch (true) {
            # Username
            case empty($username):
                $errormsg = "Username is not set yet!";
                $ok = false;
                break;
            case !ctype_alpha($username):
                $errormsg = "Only letters are allowed";
                $ok = false;
                break;
            # Email
            case empty($email):
                $errormsg = "Email is not set yet!";
                $ok = false;
                break;
            case !filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL):
                $errormsg = "Email has not a correct format";
                $ok = false;
                break;
            # Age
            case !$age === null:
            case !filter_var($age, FILTER_VALIDATE_INT, ["options" => ["min_range" => 0, "max_range" => 120]]):
                $errormsg = "This is age, is not in the right range (0 - 120) or format!";
                $ok = false;
                break;
                break;
            # Password
            case empty($password):
                $errormsg = "Password is not set yet!";
                $ok = false;
                break;
            case strlen(trim($password)) < 8:
                $errormsg = "Password to short min(8)";
                $ok = false;
                break;
            default:
                $ok = true;
                $errormsg = null;
                break;
        }

        // If $errormsg is false
        if ($ok) {
            $errormsg = "Formular korrekt abgesendet";
            $username = null;
            $email = null;
            $age = null;
            $password = null;
        }
    }
}


require_once("./Form/form.php");
