<?php

$items = [
    ['label' => 'Главная', 'url' => '/', 'role' => '?'],
    ['label' => 'Галерея', 'url' => '/gallery.php'],
    ['label' => 'Каталог', 'url' => '/shop/category.php'],
    ['label' => 'Админка', 'url' => '/admin', 'role' => 'admin'],
    ['label' => 'Личный кабинет', 'url' => '/user.php', 'role' => '@'],
    ['label' => 'Вход', 'url' => '/user.php', 'role' => '?'],
    ['label' => 'Выход', 'url' => '/user.php?action=logout', 'role' => '@'],
];

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand d-flex align-items-center" href="/">
        <img src="/images/logo.png" alt="<?= $config['name'] ?>" height="30" class="mr-2">
        <?= $config['name'] ?>
    </a>
    <div class="navbar-right" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <?php foreach ($items as $link) { ?>
                <?php if (isset($link['role'])) { ?>
                    <?php if (userHasRole($link['role'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $link['url'] ?>"><?= $link['label'] ?></a>
                        </li>
                    <?php } ?>
                <?php } else {  ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $link['url'] ?>"><?= $link['label'] ?></a>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>
</nav>