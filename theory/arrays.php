<?php
$array = [];
$array = array();
$array = [1, 2, 3, 4, 5, 6, 7];
$array1 = [
    '' => 11,
    '0' => 12,
    0 => 13,
    false => 14,
    'false' => 15
];

//array (size=3)
//  '' => int 11
//  0 => int 14
//  'false' => int 15
//

$array2 = array(
    array(1,2,3,4),
    array(3,4,5,6,true,'massiv'),
    array(3,4,5,6,true,'massiv'),
    array(3,4,5,6,true,'massiv'),
    array(3,4,5,6,true,'massiv'),
);

var_dump($array);
var_dump($array1);
var_dump($array2);


var_dump('третий элемент массива');
var_dump($array);
var_dump($array[3]);
var_dump($array1['qwe']);
var_dump($array1['']);
