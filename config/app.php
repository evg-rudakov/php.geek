<?php
$a=1;
return [
    //  Настройки приложения
    'app' => [
        'name' => 'Geekbrains PHP 1',
        'host' => 'php.geek',
        'logPath' => ROOT . "/data/logs",
        'templatesPath' => ROOT . '/templates',

        'assets' => [
            'css' => [
                '/css/bootstrap.min.css',
                '/css/style.css',
            ],
            'js' => [
                '/js/vendor/jquery-3.3.1.min.js',
                '/js/vendor/popper.min.js',
                '/js/vendor/bootstrap.min.js',
                '/js/app.js',
            ],
        ],
    ]
];