<?php
$variable = 'Назначение переменной <br/>';
echo '$variable=' . $variable;
echo '$variable=' . $variable;
$a = (int)0;
$b = null;

$resutl = $a == $b;
var_dump((int)0 === (int)'hello, world');
// @evg_rudakov - мой телеграм
// правильные переменные
$variable = true;
$two_words_three = true;
$twoWordsThree = true;
$_variable = true;
$nu123mber123__ = 123;

define('FIRST_CONST', 100);
echo FIRST_CONST;

/// неправильные переменные
// $v@riable = false
// $переменная


// Типы данных
/*
    Логический тип - bool / boolean: true/false
    Целочисленный тип - integer: 1,2,3,4,0,-1-2... от -2 147 483 648 до 2 147 483 647
 */
$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;

echo '<br/>';
echo 'Целые числа';
echo '<br/>';
echo $int10;

echo '<br/>';
echo $int2;
echo '<br/>';
echo $int8;

echo '<br/>';
echo $int16;

/*
 double - Числа с плавающей запятой - 1.8e308
*/

$double1 = 1.5;
$double2 = 1.5e4;
$double3 = 6E-8;
echo '<br/>';
echo 'Дробные числа';
echo '<br/>';
echo $double1;
echo '<br/>';
echo $double2;
echo '<br/>';
echo $double3;


/*
 * Строки - string - очень длинная
 */

$string1 = 'Строка один';
$string2 = '$string1';
$string3 = "$string1";

echo '<br/>';
echo 'Строки числа';
echo '<br/>';
echo $string1;
echo '<br/>';
echo $string2;
echo '<br/>';
echo $string3;

/*
    Массив - array -
*/
$array = [
    'string',
    'dobule',
];

/*
    Объект - Object -
*/

$object = new DateTime();


/*
    NULL, null, ничего -  длинна ничего
 */

$null = null;
echo '<br/>';
echo 'NULL';
echo $null;


/*
    Ресурс
*/