<?php

use models\{Pet, Pet2};
use models\models2\{Cat, Dog};
use models\models3\Cat as Cat3;

require_once __DIR__ . "/autoload.php";
echo "<pre>";

//      class
//         |
/* ----- this -------------------- */
//         |
//      object 

$data = require __DIR__ . "/cat-config.php";
// $cat1 = new Pet($data);
// var_dump(Pet::$count);
// echo $cat1->info();

$murzik = new Cat([
    ...$data,
    'countPaws' => 4,
]);

$barsik = new Cat([
    ...$data,
    'countPaws' => 4,
]);

$murzik->countPaws = 5;
$murzik->changeSay("гав");
echo $murzik->info();
echo $barsik->info();

// echo $murzik::getTableName() . "<br>";
// echo $barsik::getTableName();

