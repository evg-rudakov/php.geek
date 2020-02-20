<?php
require '../engine/core.php';


function routeIndex() {

    systemLog('подключили логирование', 'error');
    $echo = render('site/home');
    $image = getItem('select * from image order by id desc');
    var_dump($image);

    execute("update image set title='fourth', description='fourth fourth' where id=3;");
    $images = getItemArray('select * from image order by id desc');
    var_dump($images);

    echo $echo;
}

function routeHome() {
    $echo = render('site/home');
    echo $echo;
}

function routeError() {

    $echo = render('site/error');

    echo $echo;
}

route();

