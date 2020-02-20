<?php

$items = [
    ['label' => 'Главная', 'url' => '/'],
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
                <li class="nav-item">
                    <a class="nav-link" href="<?= $link['url'] ?>"><?= $link['label'] ?></a>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>