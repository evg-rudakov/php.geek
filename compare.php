<?php
$var1 = 30;
$var2 = 30;
var_dump($var1);
var_dump($var2);
var_dump($var2);
var_dump($var2);
var_dump($var2);


//if ($var1 >= $var2) {
if ($var1 > $var2 OR $var1 === $var2) {
    echo '$var1 > $var2 || $var1 < $var2';
    //действие 1
} else {
    echo '$var1 = $var2';
}