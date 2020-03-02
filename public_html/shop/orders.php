<?php

require '../../engine/core.php';
route();

function routeIndex() {
    onlyAuth();

    $uid = $_SESSION['auth']['id'];
    $orders = getItemArray("select * from `order` where `user_id`={$uid}");

    echo render(
        'shop/orders',
        ['orders' => $orders,]
    );
}

