<?php
require '../engine/core.php';

function routeIndex()
{
    systemLog('enter about');
    echo render('site/about');
}

route();