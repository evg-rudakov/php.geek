<?php

require '../../engine/core.php';

function routeIndex() {
    $categories = getItemArray("select * from category");
    $products = getItemArray("select * from product");

    echo render(
        'admin/catalog/list',
        [
            'categories' => $categories,
            'products' => $products
        ],
        true,
        'admin'
    );
}

function routeAddcategory() {
    if (isset($_POST['new_category'])) {
        $name = htmlspecialchars($_POST['cat_name']);
        $sql = "insert into category(`name`) values ('{$name}')";

        if (execute($sql)) {
            header("Location: /admin/catalog.php");
        }
    }

    echo render(
        'admin/catalog/add-category',
        [],
        true,
        'admin'
    );
}

function routeAddproduct() {
    $categories = getItemArray("select * from category");

    if (isset($_POST['new_product'])) {
        $name = htmlspecialchars($_POST['item_name']);
        $description = htmlspecialchars($_POST['item_description']);
        $price = intval($_POST['item_price']);
        $quantity = intval($_POST['item_quantity']);
        $category_id = intval($_POST['item_category']);

        $sql = "insert into product(`name`,`description`,`price`,`quantity`,`category_id`) values ('{$name}','{$description}',{$price},{$quantity},{$category_id})";

        if (execute($sql)) {
            header("Location: /admin/catalog.php");
        }
    }

    echo render(
        'admin/catalog/add-product',
        [
            'categories' => $categories,
        ],
        true,
        'admin'
    );
}

route();