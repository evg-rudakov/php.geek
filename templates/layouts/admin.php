<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $config['name'] ?></title>
    <link rel="shortcut icon" href="/img/logo.png">

    <?php foreach ($config['assets']['css'] as $file) : ?>
        <link rel="stylesheet" href="<?= $file ?>">
    <?php endforeach ?>
</head>
<body>

<?= render('widgets/navbar', [], false) ?>

<div class="container-fluid py-3 row">
    <div class="col-2">
        <?= render('widgets/admin-menu', [], false) ?>
    </div>
    <div class="col-10">
        <?= $content ?>
    </div>
</div>

<?php foreach ($config['assets']['js'] as $file) : ?>
    <script src="<?= $file ?>"></script>
<?php endforeach; ?>
</body>
</html>