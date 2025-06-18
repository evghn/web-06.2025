<?php
require_once __DIR__ . "/session_config.php";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["send"])) {
            $loginClient = trim(strip_tags($_POST["login"])); // очистка параметра
            
            if ($loginClient && $loginClient === $user["login"]) {
                if (password_verify($_POST["password"], $user["password"])) {
                    $_SESSION["auth"] = true;
                }
            }
        }
        
        
        header("Location: " . $_SESSION["SCRIPT_NAME"]);
        exit;        
    }