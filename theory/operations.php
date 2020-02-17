<?php
/**
 * Created by PhpStorm.
 * User: evg
 * Date: 06.02.2020
 * Time: 20:46
 */

$string1 = 'строка 1';
$string2 = 'строка 2';

$int1 = 10;
$int2 = 15;

$int10 = 10;
$int15 = 15;
$string10 = '10';
$string15 = '15';
var_dump($int10);
echo '<br/>';
var_dump($int15);
echo '<br/>';
var_dump($string10);
echo '<br/>';
var_dump($string15);
echo '<br/>';


echo "Сравнение <br/>";
var_dump($int10 === $string10);
var_dump($int10 == $string10);
echo '<br/>';

var_dump($int10 > $int15);
echo '<br/>';

var_dump($int10 < $int15);
echo '<br/>';

var_dump($int10 <= $int15);
echo '<br/>';

var_dump($int10 >= $int15);
echo '<br/>';

var_dump($int10 <> $int15);
echo '<br/>';

var_dump($int10 != $int15);
echo '<br/>';

var_dump($int10 !== $string10);
echo '<br/>';


echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';

echo $string1 . $string2;
$string3 = $string1 . $string2;
echo '<br/>';
echo $string3;

echo '<br/>';
echo 'Преинкримент<br/>';
echo $int1++ . '<br/>';
echo $int1 . '<br/>';
echo 'Постинкримент<br/>';
echo ++$int1 . '<br/>';
echo $int1 . '<br/>';

echo '$int1 = ' . $int1 . '<br/>';
echo '$int2 = ' . $int2 . '<br/>';
echo $int1 + $int2 . '<br/>';
echo $int1 * $int2 . '<br/>';
echo $int1 - $int2 . '<br/>';
echo $int1 / $int2 . '<br/>';
echo $int1 % $int2 . '<br/>';
echo $int1 ** $int2 . '<br/>';



//echo ++$int2 . '<br/>';
//
//echo --$int1 . '<br/>';
//echo $int2-- . '<br/>';
//
