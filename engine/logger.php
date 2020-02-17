<?php

/**
 * Файл с функциями для работы с логами
 */

/**
 * Функция для логирования сообщений в директорию logs
 * @param $message
 * @param string $type
 */
function systemLog($message, string $type = 'info') {
    global $config;

    // перводим тип сообщения в нижний регистр
    $type = mb_strtolower($type);
    // устанавливаем путь для логов
    $logPath = $config['app']['logPath']."/{$type}.log";

    // если переданный параметр не строка
    if (!is_string($message)) {
        // переводим в строковый формат вывода
        $message = print_r($message, true);
    }

    // генерируем строку лог-сообщения
    $output = "[".date('Y-m-d H:i:s')."] ".mb_strtoupper($type).": ".$message."\n"; // [0000-00-00 00:00:00] type: message

    // если директория логов не создана
    if (!is_dir(dirname($logPath))) {
        mkdir(dirname($logPath), 644, true);
    }

    // добавляем строку в файл
    file_put_contents($logPath, $output, FILE_APPEND);
}