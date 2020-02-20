<?php
/**
 * @var array $data - массив с данными
 */
?>
<div class="row">
    <a class="btn btn-primary" href="/gallery.php">Назад в галерею</a>
</div>
<div class="row">
    <img src="<?= $config['imagesUrl'] . '/' . $data['image'] ?>" alt="<?= $data['image'] ?>" style="margin-top: 20px">
</div>