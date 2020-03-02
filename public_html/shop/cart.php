<?php

require '../../engine/core.php';

/**
 * Отображение содержимого корзины
 */

route();
function routeIndex()
{
    $orderItems = [];

    // грузим элементы из сессии, если есть (с подгрузкой названия из БД)
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart']['items'] as $item) {
            $product = getItem("select `name` from product where id={$item['id']}");

            $orderItems[] = [
                'id' => $item['id'],
                'name' => $product['name'],
                'quantity' => $item['quantity'],
            ];
        }
    }

    echo render('shop/cart', [
        'orderItems' => $orderItems,
    ]);
}

/**
 * Добавление товара в корзину
 */
function routeAdditem()
{
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $quantity = $_POST['quantity'];

        if (isset($_SESSION['cart'])) {
            $exist = -1;
            
            // увеличиваем количество, если товар уже есть
            foreach ($_SESSION['cart']['items'] as $index => $item) {
                if ($item['id'] == $id) {
                    $exist = $index;
                }
            }
            
            if ($exist != -1){
                $_SESSION['cart']['items'][$exist]['quantity'] += $quantity;

                renderJson([
                    'result' => 'OK',
                    'status' => 'update',
                    'errors' => null,
                ]);
            } else {
                $_SESSION['cart']['items'][] = [
                    'id' => $id,
                    'quantity' => $quantity,
                ];

                renderJson([
                    'result' => 'OK',
                    'status' => 'new',
                    'errors' => null,
                ]);
            }
        } else {
            // иначе просто добвляем в массив
            $_SESSION['cart']['items'][] = [
                'id' => $id,
                'quantity' => $quantity,
            ];

            renderJson([
                'result' => 'OK',
                'status' => 'new',
                'errors' => null,
            ]);
        }
    } else {
        renderJson([
            'result' => 'ERROR',
            'errors' => [
                'Invalid POST data'
            ],
        ]);
    }
}

/**
 * Оформление заказа в БД
 */
function routeOrder()
{
    if (!isLoggedUser()) {
        header('Location: /');
    } else {
        $userID = $_SESSION['auth']['id'];

        if (isset($_SESSION['cart'])) {
            $orderSQL = "insert into `order` (user_id) values ('{$userID}')";

            if (execute($orderSQL)) {
                $orderId = lastInsertedId();

                foreach ($_SESSION['cart']['items'] as $item) {
                    $itemSQL = "insert into `order_item` (product_id, order_id, quantity) values ({$item['id']}, {$orderId}, {$item['quantity']})";
                    execute($itemSQL);
                }

                unset($_SESSION['cart']);
            }
        }

        header("Location: /");
    }
}

