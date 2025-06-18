<?php
session_start();
$user = [
    "login" => "user",
    "password" => password_hash("123", PASSWORD_BCRYPT),
];

$upload_dir = "/uploads/";
/**
 * user
 * 
 * login: string
 * password: string
 * auth: bool
 * 
 * 
 */
$auth = false;
if (isset($_SESSION["auth"])) {
    $auth = $_SESSION["auth"];
}

// var_dump($_SESSION);
// die;