<?php

require '../../engine/core.php';

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
        'sale' => isset($currentSale) ? (int) $currentSale['sale_size'] : 0,
    ]);
}

route();


