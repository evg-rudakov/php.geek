<?php

$items = [
    ['label' => 'Каталог', 'url' => '/admin/catalog.php'],
    ['label' => 'Скидки и акции', 'url' => '/admin/sales.php'],
    ['label' => 'Заказы', 'url' => '/admin/orders.php'],
    ['label' => 'Пользователи', 'url' => '/admin/users.php'],
];

?>

<ul class="nav flex-column">
    <?php foreach ($items as $link) : ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= $link['url'] ?>"><?= $link['label'] ?></a>
        </li>
    <?php endforeach; ?>
</ul>