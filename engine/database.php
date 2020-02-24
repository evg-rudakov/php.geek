<?php

/**
 * Файл с функциями для работы с базой данных
 */
$connection = mysqli_connect(
    $config['db']['host'],
    $config['db']['user'],
    $config['db']['password'],
    $config['db']['database']
);

/**
 * Получение одной строки из базы данных по SQL запросу
 * @param string $sql
 * @return array|null
 */
function getItem(string $sql) {
    global $connection;
//    $sql = mysqli_real_escape_string($connection, $sql);
    $result = mysqli_query($connection, $sql);


    if ($result === false ) {
        var_dump(mysqli_error($connection));
        die();
    }

    $row = mysqli_fetch_assoc($result);
    return $row;
}

/**
 * Получение нескольких строк из базы данных по SQL запросу
 * @param string $sql
 * @return array
 */
function getItemArray(string $sql) {
    global $connection;
    $result = mysqli_query($connection, $sql);

    $rows = [];

    if ($result === false ) {
        var_dump(mysqli_error($connection));
        die();
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

/**
 * Простое выполнение SQL запроса к базе данных
 * @param string $sql
 * @return bool|mysqli_result
 */
function execute(string $sql) {
    global $connection;
    $result = mysqli_query($connection, $sql);
    if ($result === false ) {
        var_dump(mysqli_error($connection));
        die();
    }

    return $result;
}

/**
 * Возврат ID последней операции вставки
 * @return int
 */
function lastInsertedId() {
    global $connection;
    $result = mysqli_insert_id($connection);

    return (int)$result;
}