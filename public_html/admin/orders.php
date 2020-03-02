<?php

require '../../engine/core.php';

function routeIndex() {
    $orders = getItemArray("select * from `order`");
    foreach ($orders as $num => $order) {
        $user = getItem("select * from users where id=" . $order['user_id']);
        $orders[$num]['user'] = $user;
    }

    echo render(
        'admin/orders',
        [
            'orders' => $orders,
        ],
        true,
        'admin'
    );
}

function routeProcess() {
    $id = $_POST['order_id'];

    $sql = "update `order` set status=1 where id={$id}";

    if (execute($sql)) {
        renderJson([
            'status' => 'OK',
            'message' => 'Изменения сохранены'
        ]);
    } else {
        renderJson([
            'status' => 'ERROR',
            'message' => 'Что-то пошло не так'
        ]);
    }
}

function routeRemove() {
    $id = $_POST['order_id'];

    $sql = "delete from `order_item` where `order_id`={$id}";

    if (execute($sql)) {
        $sql = "delete from `order` where id={$id}";

        if (execute($sql)) {
            renderJson([
                'status' => 'OK',
                'message' => 'Заказ успешно удален'
            ]);
        } else {
            renderJson([
                'status' => 'OK',
                'message' => 'Ошибка при удалении заказа'
            ]);
        }
    } else {
        renderJson([
            'status' => 'OK',
            'message' => 'Ошибка при удалении позиций заказа'
        ]);
    }
}

route();