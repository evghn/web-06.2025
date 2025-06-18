<?php
require_once __DIR__ . "/session_config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["exit"])) {
        $_SESSION["auth"] = false;
    }


    header("Location: " . $_SESSION["SCRIPT_NAME"]);
    exit;
}
