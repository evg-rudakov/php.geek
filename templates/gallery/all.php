<?php
/** @var array $data - массив картинок */
$images = $data['images'];
?>

<div class="row">
        <?php foreach ($images as $img) { ?>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <a href="gallery.php?action=one&image=<?=$img?>"><img src="<?= $config['imagesUrl'].'/'.$img ?>" alt="<?= $img ?>" width="200px"></a>
                <a href="gallery.php?action=one&image=<?=$img?>">gallery.php?action=one&image=<?=$img?></a>

            </div>
        <?php } ?>
</div>
