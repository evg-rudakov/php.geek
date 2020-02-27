<?php

require '../../engine/core.php';

function routeIndex() {
    onlyAdmin();

    $sales = getItemArray("select * from sales");

    echo render('admin/sales', [
        'sales' => $sales,
    ], true, 'admin');
}

function routeAdd() {
    onlyAdmin();

    if (isset($_POST['new_sale'])) {
        $size = intval($_POST['sale_size']);
        $date = date(
            'Y-m-d',
            strtotime($_POST['sale_date'])
        );

        $sql = "insert into sales (sale_size, active_till) values ({$size}, '$date')";

        if (execute($sql)) {
            header("Location: /admin/sales.php");
        }
    }

    echo render('admin/sales-new', [
        'sales' => []
    ], true, 'admin');
}

route();