<?php

//     A        B     D
/*
for ($i = 0, $b = 0; ; $i++) {
    if ($i > 9) {
        break;
    }

    // 4 % 3 = 1   
    
    if (0 === $i || $i % 2) {
        continue;
    }
    
    // C
    echo $i . "<br>";

    echo "<div style=\"color: green;\">";
        for ($j = 0; $j < 9; $j++) {
            if ($j > 0 && $j % 2) {
                echo "$j ";
            }
        }
    echo "</div>";
    
}
*/


/**
 *  A -> B -> C ->D -> B -> C-> D->....n
 * 
 */

?>

<?php /*for ($i = 0; $i < 10; $i++): ?>
    <div style="color: #<?= $i ? '00' . $i * 1000 : "000000" ?>;">
        <?= $i ?>
    </div>
<?php endfor */?>


<?php

// $a = 5;
// if ($a > 5) {
//     $b = 10;
// } else {
//     $b = 20;
// }

// $b = $a > 5 ? 10 : 20;

// // $a = 5;
// if ($a == null) {
//     $b = 10;
// } else {
//     $b = $a;
// }

// $b = $a ?? 10;

$i = 0;
while ($i < 10) {
    $j = 0;
    echo "<div>";
    while ($j < 10) {
        echo $j * $i . " ";
        $j++;
    }
    echo "</div>";
    echo $i++ . " ";
}

// $check = true;
// while ($check) {
//     //.....

//     $check = false;
// }