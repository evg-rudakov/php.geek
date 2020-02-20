<?php
/**
 * @var array $data - массив с данными
 */
$image = $data['image'];
?>
<div class="row">
    <a class="btn btn-primary" href="/gallery.php">Назад в галерею</a>
</div>
<div class="row">
    <img src="<?= $image['path'] . '/' . $image['name'] ?>" alt="<?= $image['name'] ?>" style="margin-top: 20px">
</div>