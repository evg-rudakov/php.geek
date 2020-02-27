<?php

require '../../engine/core.php';
route();

/**
 * Выводим список категорий
 */
function routeIndex() {
    $cats = getItemArray(
        "select * from category"
    );

    echo render('shop/categories', [
        'cats' => $cats
    ]);
}

/**
 * Выводим список товаров в категории
 */
function routeView() {
    $id = $_GET['id'];

    $prods = getItemArray(
        "select * from product where category_id={$id}"
    );

    echo render('shop/products', [
        'prods' => $prods
    ]);
}
