<?php
/**
 * domain.com/?action=all
 */

require '../engine/core.php';

function routeIndex()
{

    //нужно добавить в выборку ниже order by rating
    $images = getItemArray('select name, rating from image order by rating desc');

    echo render('gallery/all', ['images' => $images]);
}

/**
 * domain.com/?action=one&image=1.jpg
 */
function routeOne()
{
    $image = getItem('select * from image where name="'.$_GET['image'].'"');

    if (!empty($image)) {
        $rating = $image['rating'] ?? 0;
        execute('update image set rating=' . ($rating + 1) . ' where id=' . $image['id']);
        $image = getItem('select * from image where name="'.$_GET['image'].'"');

        echo render('gallery/one', ['image' => $image]);
    } else {
        echo render('site/error');
    }
}

function routeFill() {
    fillDataBase();
    render('site/success');
}

function routeDownload()
{
    echo render('gallery/download');
}

route();