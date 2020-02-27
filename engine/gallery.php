<?php
/**
 * Функция которая считывает папку $config['app']['imagesPath'] и создает для всех файлов внутри запись в БД
 */
function fillDataBase()
{
    global $config;
    $images = scandir($config['app']['imagesPath']);

    foreach ($images as $num => $img) {
        if ($img == '.' || $img == '..') {
            unset($images[$num]);
            continue;
        }
        $imageData = getimagesize($config['app']['imagesPath'] . '/' . $img);
        $width = $imageData[0];
        $height = $imageData[1];
        $size = $imageData['bits'];
        $mime = $imageData['mime'];
        $path = $config['app']['imagesPath'];
        $name = $img;
        $alt = $img;

        $item = getItem('select * from image where name="' . $name . '" and path="' . $path . '"');
        if (!$item) {
            execute(
                "insert into
                    gb.image (path, title, width, height, size, alt, name, mime)
                    values ('$path', '$name', $width, $height, $size, '$alt', '$name', '$mime')");
        }
    }
}

/**
 * Функция загрузки изображения в папку
 * @param string $tmpFileName
 * @param string $userFileName
 * @return bool
 */
function loadImage(string $tmpFileName, string $userFileName)
{
    global $config;
    //если такой файл уже есть, отредактируем имя
    if (file_exists($config['app']['imagesPath'] . '/' . $userFileName)) {
        $userFileName = '_' . $userFileName;
    }
    //загрузим файл в папку
    if (move_uploaded_file($tmpFileName, $config['app']['imagesPath'] . '/' . $userFileName)) {
        //обновим данные относительно БД
        fillDataBase();
        return true;
    }
    return false;
}



