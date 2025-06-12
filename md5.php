<?php

$password = "759a16793753f735bdd6d708239836a3";
$soult = "12334sd%4#IKJNBO9";

$user = "qwerty";

// echo md5($password . $soult);

if ($password == md5 ($user . $soult)) {
    echo "ok";
} else {
    echo "no";
}