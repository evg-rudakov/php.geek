<?php

require '../../engine/core.php';

route();
/**
 * Выводим информацию о товаре
 */
function routeIndex() {
    $id = $_GET['id'];

    $item = getItem(
        "select * from product where id={$id}"
    );

    $currentSale = getItem(
        "select * from sales where active_till > NOW() order by id desc"
    );

    echo render('shop/details', [
        'item' => $item,
        'sale' => $currentSale ? (int)$currentSale['sale_size'] : 0,
    ]);
}

