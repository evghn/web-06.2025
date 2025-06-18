<?php
require_once __DIR__ . "/session_config.php";


$dir = __DIR__ . $upload_dir;
$fileName = 
    md5(time() . basename($_FILES['userfile']['name'])) 
    . "."
    . pathinfo($_FILES['userfile']['name'])["extension"];

$uploadfile = $dir . $fileName;


$_SESSION["user-file"] = $upload_dir . $fileName;

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    header("Location: " . $_SESSION["SCRIPT_NAME"]);
    exit;
} else {
    echo "Возможная атака на сервер через загрузку файла!\n";
    die;
}


