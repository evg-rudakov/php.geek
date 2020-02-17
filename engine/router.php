<?php
/**
 * Функция для автоматического запуска нужного действия
 * через GET параметр action
 */
function route()
{
    // берем название функции из GET
    $action = (isset($_GET['action'])) ? $_GET['action'] : 'index';

    // добавляем префикс route к Action => routeIndex()
    $action = 'route' . ucfirst(strtolower($action));

    // проверка существования функции в файлах
    if (function_exists($action)) {
        // вызов функции при наличии
        call_user_func($action);
    } else {
        // иначе выводим ошибку
        echo render('site/error');
    }
}