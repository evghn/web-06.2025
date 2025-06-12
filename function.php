<pre>
<?php

// n = 2..9 => a(n) | n
$fn = function ($val) {
    return $val;
};

echo $fn(5);

// function hello(int $a, ?int $n = null): string|null {
//     if (is_null($n)) {
//         return null;
//     }
//     return "number:  $n<br>";
// }


// echo hello(2);

// function calc(int $x, int $y, callable $fn): int {
//     return $fn($x, $y);
// }

// echo calc(2, 3, function ($x, $y) {
//     return $x + $y;
// }) . "</br>";

// echo calc(2, 3, function ($x, $y) {
//     return $x - $y;
// }) . "</br>";

// echo calc(2, 3, function ($x, $y) {
//     return $x * $y;
// }) . "</br>";



// $mas = [2, 3, 4, 5, 6, 78, 9];

// print_r(array_map(function ($val) {
//     return $val ** 2;
// }, $mas));


// function myMap(callable $fn, array $mas): array {
//     $result = [];
//     foreach ($mas as $val) {
//         $result[] = $fn($val);
//     }
//     return $result;
// }

function myMap2(callable $fn, array &$mas): void {    
    foreach ($mas as &$val) {
        $val = $fn($val);
    }    
}

$mas = [2, 3, 4, 5, 6, 78, 9];

// print_r($mas);

// myMap2(fn($val) => $val ** 2, $mas);

// print_r($mas);
// print_r(myMap(function ($val) {
//     return $val ** 2;
// }, $mas));

// print_r(myMap(fn($val) => $val ** 2, $mas));

// $user = [
//     "login" => "userLogin",
//     "password" => "userPassword",
//     "info" => function(array $val) {
//         foreach($val as $key => $el) {
//             if (is_string($el)) {
//                 echo "<div>$key: $el</div>";
//             }
//         } 
//     }
// ];


// $user["info"]($user);


// function calc3(int &$x): void {
//     $x **= 3;
// }

// $x = 3;
// calc3($x);

// echo $x;
