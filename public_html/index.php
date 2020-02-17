<?php
require '../engine/core.php';


function routeIndex() {
    systemLog('подключили логирование', 'error');
    $echo = render('site/home');
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

