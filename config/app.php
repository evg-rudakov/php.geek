<?php
return [
    //  Настройки приложения
    'app' => [
        'name' => 'Geekbrains PHP 1',
        'host' => 'php.geek',
        'logPath' => ROOT . "/data/logs",
        'templatesPath' => ROOT . '/templates',

        'imagesUrl' => '/images',
        'imagesPath' => 'images',

        'assets' => [
            'css' => [
                '/css/bootstrap.min.css',
                '/css/jquery.fancybox.min.css',
                '/css/style.css',
            ],
            'js' => [
                '/js/vendor/jquery-3.3.1.min.js',
                '/js/vendor/popper.min.js',
                '/js/vendor/bootstrap.min.js',
                '/js/vendor/jquery.fancybox.min.js',
                '/js/app.js',
            ],
        ],
    ]
];