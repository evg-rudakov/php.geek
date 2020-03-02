<?php
require '../../engine/core.php';

function routeIndex()
{
    $users = getItemArray('select * from users');
    echo render('admin/users/index', ['users' => $users], true, 'admin');
}


function routeView()
{
    if (!isset($_GET['id'])) {
        echo render('site/error', ['text'=>'ID не указан']);
    }

    $userId = $_GET['id'];

    $user = getItem('select * from users where id='.$userId);
    if ($user) {
        echo render('admin/users/view', ['user' => $user], true, 'admin');
    } else {
        echo render('site/error', ['text' => 'Пользователь не найден']);
    }
}

route();
