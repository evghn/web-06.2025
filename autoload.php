<?php

// define('PATH_CLASS', __DIR__ . "/");
// define('PATH_CLASSv2', __DIR__ . "/models/models2/");
// define('PATH_CLASSv3', __DIR__ . "/models/models3/");

function autoload($class) {    
    
    $fileName = __DIR__ . "/$class.php";
   
    if (file_exists($fileName)) {
        return require_once $fileName;
    }
}


// function autoload2($class) {
//     $fileName = PATH_CLASSv2 . "$class.php";
    
//     if (file_exists($fileName)) {    
//         return require_once $fileName;
//     }   
// }


// function autoload3($class) {
//     $fileName = PATH_CLASSv3 . "$class.php";
    
//     if (file_exists($fileName)) {    
//         return require_once $fileName;
//     }   
// }



spl_autoload_register('autoload');
// spl_autoload_register('autoload3');
// spl_autoload_register('autoload2');
