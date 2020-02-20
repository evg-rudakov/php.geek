<?php
/**
 * domain.com/?action=all
 */

require '../engine/core.php';

function routeIndex()
{
    global $config;
    $images = scandir($config['app']['imagesPath']);

    foreach ($images as $num => $img) {
        if ($img == '.' || $img == '..') {
            unset($images[$num]);
        }
    }

    echo render('gallery/all', ['images' => $images]);
}

/**
 * domain.com/?action=one&file=1.jpg
 */
function routeOne()
{
    global $config;
    $filePath = $config['app']['imagesPath'] . '/' . $_GET['image'];

    if (file_exists($filePath)) {
        echo render('gallery/one', ['image' => $_GET['image']]);
    } else {
        echo render('site/error');
    }

}

route();