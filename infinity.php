<?php
$i = 0;
//while (true) {
//    $i++;
//    var_dump($i);
//
//    if ($i>10000) {
//        break;
//    }
//}
for ($k = 0; $k < 100; $k++) {
    for ($j = 0; $j < 100; $j) {
        $j++;
        for ($i = 0; $i < 10; $i++) {
            if (($i % 2) !== 0) {
                break 3;
            }
            var_dump($i);
        }
        var_dump($j);
    }
}

$a = 1;
