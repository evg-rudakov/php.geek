<?php

/**
 * Файл с функциями для работы с шаблонами страниц
 */

/**
 * Генерация шалона страниц для отображения
 *
 * @param string $template Название шаблона
 * @param array $data Массив данных для передачи
 * @param bool $withLayout Использовать ли основной макет
 * @param string $layout Название основного макета
 *
 * @return string HTML-код готового шаблона
 */
function render(string $template, array $data = [], bool $withLayout = true, string $layout = 'main') {
    global $config;

    // путь к шаблонам
    $templates = [
        'layout' => "{$config['app']['templatesPath']}/layouts/{$layout}.php",
        'page' => "{$config['app']['templatesPath']}/{$template}.php"
    ];

    // загружаем настройки приложения для глобального доступа
    $data['config'] = $config['app'];

    // подгружаем содержимое шаблона
    $pageView = getTemplateContent($templates['page'], $data);

    // подключаем основной макет, если $withLayout
    if ($withLayout) {
        $data['content'] = $pageView;

        return getTemplateContent($templates['layout'], $data);
    } else {
        // выводим просто страницу
        return $pageView;
    }
}

/**
 * Чтение шаблона из буфера вывода
 *
 * @param string $filepath Путь к шаблону
 * @param array $data Массив данных для обработки
 *
 * @return string HTML-код щаблона
 */
function getTemplateContent(string $filepath, array $data) {
    // открываем буфер вывода
    ob_start();
    // извлекаем переменные из переданного массива
    // ['user' => 'Admin', 'password' => '123123'] ======> $user = 'Admin'; $password='123123';
    extract($data);
    // выполняем файл шаблона
    include $filepath;
    // возвращаем данные из буфера вывода
    return ob_get_clean();
}

/**
 * Функция для вывода JSON в ответ на AJAX-запрос
 * @param $data
 */
function renderJson($data) {
    header('Content-type: application/json');
    echo json_encode($data);
}