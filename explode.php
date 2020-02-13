<?php
$string = 'cat, dog, pig, cow, ezh';
$animals = explode(', ', $string);
foreach ($animals as $key => $animal) {
    if ($animal === 'ezh') {
        $animals[$key] = 'bat';
    }
}
$string = implode(', ', $animals);
$animals[] = 'ant';

$animals[count($animals)] = 'ant';


$array1 = [
    11,
    12,
    13,
    'true' => 14,
    'false' => 15
];

$array1[] = 10;
var_dump($array1);
var_dump('-----------------------------------------');
var_dump('-----------------------------------------');
sort($array1);
var_dump($array1);





