<?php
/**
 * @var array $data - массив с данными
 */
$image = $data['image'];
$comments = $data['comments'];
?>
<div class="row">
    <a class="btn btn-primary" href="/gallery.php">Назад в галерею</a>
</div>
<div class="row">
    <p>Рейтинг: <?= $image['rating'] ?></p>
    <img src="<?= $image['path'] . '/' . $image['name'] ?>" alt="<?= $image['name'] ?>" style="margin-top: 20px; width: 600px;">
</div>
<div>
    <h3>Комментарии: </h3>
    <?php foreach ($comments as $comment) { ?>
        <p><strong><?= date('d.m.yy H:i:s', $comment['created_at']) ?></strong> <?= $comment['text'] ?> </p>
    <?php } ?>
</div>
<form action="gallery.php?action=createСomment" method="post">
    <label for="comment-text">Комментарий</label>
    <input id="comment-text" name="text" type="text"/>
    <input type="hidden" name="image_id" value="<?=$image['id']?>">
    <input type="submit" class="btn-primary btn">
</form>
