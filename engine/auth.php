<?php

/**
 * Файл для работы с аутентификацией в сессии
 */

/**
 * Проверка авторизован ли пользователь
 * @return bool
 */
function isLoggedUser()
{
    return isset($_SESSION['auth']['login']);
}

/**
 * Проверка прав пользователя для показа блоков (например в меню, смотреть пункт role в navbar.php)
 * @param string $role
 * @return bool
 */
function userHasRole(string $role) {
    if ($role == '?') return !isLoggedUser(); // гость
    if ($role == '@') return isLoggedUser(); // авторизован
    if ($role == 'admin') return isAdmin(); // админ

    return false;
}

/**
 * Авторизация пользователя
 * @param string $login
 * @param bool $remember
 */
function loginUser(string $login, bool $remember = false)
{
    // загружаем пользователя из БД
    $user = getItem("select * from users where login='{$login}'");
    // запоминаем логин в сессии
    $_SESSION['auth'] = [
        'id' => $user['id'],
        'login' => $user['login'],
    ];

    // если логин = admin
    if ($login == 'admin' || $login == 'admin') {
        // даем дополнительные права
        $_SESSION['auth']['admin'] = true;
    }

    // если поставил "запомнить меня"
    if ($remember) {
        $auth = [
            'login' => $_SESSION['auth']['login'],
        ];
        setCook('auth', json_encode($auth));
    }
}

/**
 * Выход из системы
 */
function logoutUser()
{
    unset($_SESSION['auth']);
    session_destroy();
    header("Location: /");
}

/**
 * Проверка на администратора (смотреть в функции логина)
 * @return bool
 */
function isAdmin()
{
    return (isset($_SESSION['auth']['admin']) && $_SESSION['auth']['admin']);
}

/**
 * Попытка загрузки авторизации через COOKIES
 */
function autoLogin() {
    if (isset($_COOKIE['auth'])) {
        $auth = json_decode($_COOKIE['auth'], true);

        loginUser($auth['login']);
    }
}

/**
 * Функция для упрощения записи COOKIES
 * @param string $key
 * @param $value
 */
function setCook(string $key, $value) {
    global $config;

    setcookie(
        $key,
        $value,
        time() + 3600 * 2, //seconds
        '/',
        $config['app']['host'],
        true,
        true
    );
}

/**
 * Функция для сброса значения COOKIES
 * @param string $key
 */
function resetCook(string $key) {
    global $config;

    setcookie(
        $key,
        '',
        0,
        '/',
        $config['app']['host'],
        true,
        true
    );
}

/**
 * Функция для открытия доступа только авторизованным пользователям
 */
function onlyAuth() {
    if (!isLoggedUser()) {
        header("Location: /index.php?action=error");
    }
}

/**
 * Функция для открытия доступа только администраторам
 */
function onlyAdmin() {
    if (!isAdmin()) {
        header("Location: /index.php?action=error");
    }
}