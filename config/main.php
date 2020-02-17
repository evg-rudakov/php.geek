<?php

// подгрузка всех настроек приложения
$config = array_merge(
    include 'app.php',
    include 'db.php'
);