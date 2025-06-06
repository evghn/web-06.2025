<pre>
<?php

// $mas = [
//     1 => 2,
//     3 => 'user',
//     4 => [],
//     5 => false,
//     40 => null,
//     2 => true,
//     500 => 100.0,
//     0 => -500
// ];

// $mas[2] = 200;
// var_dump(count($mas)); die;
$user = [
    "name" => "alex",
    "surname" => "alex2",
    "age" => 15,
    "sex" => "male",
    "login" => "alex-alex",
    "password" => "alex123",
    "email" => "alex@mail.ru",
    0 => [
        "user2" => []
    ]

];

// foreach ($user as $key => $val) {
//     if (is_array($val)) {
//         echo "<div>$key => " 
//             . var_dump($val)
//             . "</div>";
//         continue;
//     }

//     echo "<div>$key => $val</div>";    
// }


$menu = [
    ["title" => "Главная", "file" => "main.php"],
    ["title" => "О нас", "file" => "about.php"],
    ["title" => "Каталог", "file" => "catalog.php"],
];
?>

<ul style="display: flex; justify-content: flex-start;">
    <?php foreach ($menu as $val): ?>
        <li style="list-style-type: none;">
            <a style="text-decoration: none;" href="<?= $val["file"] ?>"><?= $val["title"] ?></a>
        </li>
    <?php endforeach ?>
</ul>


<div style="display: flex; justify-content: center; gap: 30px">
    <?php for ($i = 1; $i < 5; $i++): ?>        
        <img style="width: 150px; " src="/img/<?= $i ?>.png" alt="">        
    <?php endfor ?>
</div>


<div style="display: flex; justify-content: center; gap: 30px">
    <?php 
        $path = "carousel";
        $files = scandir(__DIR__ . "/" . $path); 
    ?>
    <?php foreach ($files as $file): ?>        
        <?php if (is_file($path . "/" . $file)): ?>
            <img style="width: 150px; " src="<?= "$path/$file" ?>" alt="">        
        <?php endif ?>
    <?php endforeach ?>
</div>


