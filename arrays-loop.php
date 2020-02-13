<?php
$array1 = [
    0 => 10,
    'hi' => 11,
    'hello' => 12,
    'good day' => 13,
    4 => 14,
    5 => 15,
    6 => [
        1 => 2,
        0 => 3,
        'tratatat' => 4
    ]
];
var_dump($array1);

echo "<hr/>";
echo "<hr/>";
echo "<hr/>";
echo "<hr/>";
$result = false;
foreach ($array1 as $key => $value) {
    if ($value === 13) {
        $result = true;
        break;
    }
}
var_dump($result);

$result = in_array(13, $array1);
var_dump(is_array($result));
var_dump(is_array($array1));
var_dump($result);


$string = 'cat, dog, pig, cow, ezh';
$animals = explode(', ', $string);
var_dump($string);
var_dump($animals);

