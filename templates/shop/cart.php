<?php
/** @var array $orderItems */

?>
<h1>Корзина</h1>

<?php if (count($orderItems) > 0) : ?>
    <ul class="list-group my-5">
        <?php foreach ($orderItems as $item) : ?>
            <li class="list-group-item">
                <?= $item['name'] ?> (количество: <?= $item['quantity'] ?>)
                <a href="/shop/product.php?id=<?= $item['id'] ?>">Посмотреть</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <?php if (isLoggedUser()) : ?>
        <a href="/shop/cart.php?action=order" class="btn btn-success">Оформить заказ</a>
    <?php else : ?>
        <button disabled class="btn btn-success">Оформить заказ (только для зарегистрированных пользователей)</button>
    <?php endif; ?>
<?php else: ?>
    <div class="my-5">
        <em>в корзине пока ничего нет</em>
    </div>
<?php endif ?>
