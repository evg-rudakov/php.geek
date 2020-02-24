<?php

require '../engine/core.php';

/**
 * демонстрация одного товара
 */
function routeOne() {
    echo render('goods/one');
}

/**
 * демонсрация всех товаров
 */
function routeAll() {
    echo render('goods/all');
}

function routeIndex()
{
    echo render('goods/index');
}

/**
 * создание нового товара
 */
function routeCreate() {
    if (!empty($_POST)) {
        $price = $_POST['price'];
        $name = $_POST['name'];
        execute('insert into goods 
                        (price, created_at, name) values 
                        ("' . $price . '", ' . time() . ', ' . $name . ')');
        header("Location: goods.php");
    }
    echo render('goods/create');
}

/**
 * изменение товара
 */
function routeUpdate() {
    echo render('goods/update');

}

/**
 * удаление товара
 */
function routeDelete()
{
    if (!empty($_GET['id'])) {
        execute('delete from goods where id=' . $_GET['id']);
        header("Location: goods.php");
    }
}

route();