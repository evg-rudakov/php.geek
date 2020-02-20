<?php
function fillDataBase()
{
    global $config;
    $images = scandir($config['app']['imagesPath']);

    foreach ($images as $num => $img) {
        if ($img == '.' || $img == '..') {
            unset($images[$num]);
            continue;
        }
        $imageData = getimagesize($config['app']['imagesPath'].'/'.$img);
        $width = $imageData[0];
        $height = $imageData[1];
        $size = $imageData['bits'];
        $mime = $imageData['mime'];
        $path = $config['app']['imagesPath'];
        $name = $img;
        $alt = $img;

        $item = getItem('select * from image where name="' . $name . '" and path="' . $path.'"');
        if (!$item) {
            execute(
                "insert into
                    gb.image (path, title, width, height, size, alt, name, mime)
                    values ('$path', '$name', $width, $height, $size, '$alt', '$name', '$mime')");
        }
    }
}
