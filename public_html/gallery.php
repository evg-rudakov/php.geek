<?php
/**
 * domain.com/?action=all
 */

require '../engine/core.php';

function routeAll(){
    echo render('gallery/all');
}
/**
 * domain.com/?action=one&file=1.jpg
 */
function routeOne() {
    $_GET['action'];
    $_GET['file'];
    echo render('gallery/one');
}

route();