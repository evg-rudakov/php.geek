<?php

// первоначальный запуск (сессия, константы, окружение)
define('ROOT', dirname(__DIR__));

// включаем показ ошибок
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// запускаем сессию
session_start();

require ROOT . '/config/main.php';         // конфигурация
require ROOT . '/engine/render.php';       // генерация шаблонов
require ROOT . '/engine/router.php';       // маршрутизация
require ROOT . '/engine/logger.php';       // логирование
require ROOT . '/engine/database.php';       // базаданных
require ROOT . '/engine/gallery.php';       // галлерея