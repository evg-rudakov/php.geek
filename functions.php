<?php
// определеяем уровень протоколирования ошибок
error_reporting(E_ALL | E_STRICT);
// определяем режим вывода ошибок
ini_set('display_errors', 'On');


$var1 = 10;
$var2 = 20;

if ($var1 > $var2) {
    //действие 1
    //действие 2
    //действие 3
    //действие 4
    // пишем код который вовзводит $var1 в степень $var2
} else {
    // пишем код который возводит $var2 в степень $var1
    //действие 1
    //действие 2
    //действие 3
    //действие 4
}


//DRY - don't repeat your self

/**
 * ВычисляетЪ разность между $arg1 и $arg2
 * @param float $arg1
 * @param float $arg2
 * @return float
 */
define('FIRST_CONST', 'global_const');

$global = 'global';
function raznost(float $arg1,  float $arg2 = 5)
{
    echo FIRST_CONST;

    return $arg1 - $arg2;
}
$result = raznost(2, 2);
echo $global;
echo "<br/>";


function finbonacci($number, $prev1 = 1, $prev2 = 0)
{
    $current = $prev1 + $prev2;
    var_dump($current);
    if ($number > 1) {
        finbonacci($number - 1, $current, $prev1);
    }
}
finbonacci(10);

$string = 'Hel1lo Everyone';
$result = str_replace('Hello','Goodbye', $string);
echo $result;



