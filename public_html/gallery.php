<?php
/**
 * domain.com/?action=all
 */

require '../engine/core.php';

function routeIndex()
{

    //нужно добавить в выборку ниже order by rating
    $imagesSql = getItemArray('select name from image');
    foreach ($imagesSql as $item) {
        $images[] = $item['name'];
    }

    echo render('gallery/all', ['images' => $images]);
}

/**
 * domain.com/?action=one&file=1.jpg
 */
function routeOne()
{
    $image = getItem('select * from image where name="'.$_GET['image'].'"');

    if (!empty($image)) {
        //увеличить $image['rating'] на +1 execute

        echo render('gallery/one', ['image' => $image]);
    } else {
        echo render('site/error');
    }
}

function routeFill() {
    fillDataBase();
    render('site/success');
}

route();