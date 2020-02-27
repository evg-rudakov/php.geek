<?php
/** @var array $data - массив картинок */
$images = $data['images'];
?>
<p><a href="gallery.php?action=download" class="btn btn-success">Загрузить</a>
</p>
<?php foreach ($images as $image) { ?>
    <a data-fancybox="gallery" href="<?= $config['imagesUrl'] . '/' . $image['name'] ?>">
        <img width="150px" src="<?= $config['imagesUrl'] . '/' . $image['name'] ?> ">
    </a>
    <a href="gallery.php?action=one&image=<?= $image['name'] ?>">gallery.php?action=one&image=<?= $image['name'] ?></a>
    <p>Рейтинг: <?= $image['rating'] ?></p>

<?php } ?>