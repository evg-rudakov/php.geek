<?php
/**
 * @var string $content - содержимое страницы на отрисовку
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $config['name'] ?></title>
<link rel="shortcut icon" href="/images/logo.png">

<?php foreach ($config['assets']['css'] as $file) { ?>
    <link rel="stylesheet" href="<?= $file ?>">
<?php } ?>
</head>
<body>
<?//= render('widgets/navbar', [], false) ?>

<div class="container">
    <div class="py-3">
        <?= $content ?>
    </div>
</div>

<?php foreach ($config['assets']['js'] as $file) : ?>
    <script src="<?= $file ?>"></script>
<?php endforeach; ?>

</body>
</html>