<?php
// 1 - утро
// 2 - обед
// 3 - вечер
// 4 - ночь
$daytime = 4;

echo $daytime === 1 ? 'утро' : (($daytime === 2) ? 'обед' : (($daytime === 3) ? 'вечер ' : 'ночь'));

echo $daytime === 1 ? 'утро' : 'не утро';

echo '<br/>';

switch ($daytime) {
    case (4 - 3):
        echo 'утро';
        break;
    case (4 - 2):
        echo 'обед';
        break;
    case (4 - 1):
        echo 'вечер';
        break;
    case (4 - 0):
        echo 'ночь';
        break;
}


if ($daytime === 1) {
    echo 'утро';
} else if ($daytime === 2) {
        echo 'обед';
    } else if ($daytime === 3) {
            echo 'вечер';
    } else if ($daytime === 4) {
            echo 'ночь';
    } else {
        echo "введите номер времени суток";
}

