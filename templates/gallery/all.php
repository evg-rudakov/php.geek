<?php
/** @var array $data - массив картинок */
$images = $data['images'];
?>

    <?php foreach ($images as $img) { ?>
        <a data-fancybox="gallery" href="<?= $config['imagesUrl'] . '/' . $img ?>">
            <img width="150px" src="<?= $config['imagesUrl'] . '/' . $img ?> ">
        </a>
        <a href="gallery.php?action=one&image=<?= $img ?>">gallery.php?action=one&image=<?= $img ?></a>

    <?php } ?>
