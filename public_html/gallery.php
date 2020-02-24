<?php
/**
 * domain.com/?action=all
 */

require '../engine/core.php';

function routeIndex()
{

    //нужно добавить в выборку ниже order by rating
    fillDataBase();
    $images = getItemArray('select name, rating from image order by rating desc');

    echo render('gallery/all', ['images' => $images]);
}

/**
 * domain.com/?action=one&image=1.jpg
 */
function routeOne()
{
    //xss
    $imageName =
        (string)
        htmlspecialchars(
            strip_tags($_GET['image'])

    );

    $image = getItem('select * from image where name="'.$_GET['image'].'"');

    if (!empty($image)) {
        $name = $_GET['image'];
        $rating = $image['rating'] ?? 0;

        execute('update image set rating=' . ($rating + 1) . ' where id=' . $image['id']);

        $image = getItem('select * from image where name="'.$_GET['image'].'"');

        $comments = getItemArray('select * from image_comment where image_id='.$image['id']);

        echo render('gallery/one', ['image' => $image, 'comments' => $comments]);
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
    if (!empty($_FILES)) {
        $file = $_FILES['file'];
        $name = $file['name'];
        $type = $file['type'];
        $size = $file['size'];

        if ($size > 5242880 || explode('/', $type)[0] !== 'image') {
            render('site/error');
            die();
        }
        if (loadImage($file['tmp_name'], $file['name'])){
            header("Location: gallery.php");
            die();
        };

    }
    echo render('gallery/download');
}

function routeCreateСomment()
{
    if (!empty($_POST)) {
        $post = $_POST;
        $image = getItem('select * from image where id='.$post['image_id']);
        if (!empty($image)) {
            //сохранять комментарий
            $imageId = (int)$post['image_id'];
            $text = $post['text'];
            execute('insert into image_comment 
                        (text, created_at, image_id) values 
                        ("'.$text.'", '.time().', '.$imageId.')');
            header("Location: gallery.php?action=one&image=".$image['name']);
            die();
        }
    }

echo render('site/error');
}

route();