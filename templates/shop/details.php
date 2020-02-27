<?php /** @var array $item */?>
<?php /** @var int $sale */?>
<h1><?= $item['name'] ?></h1>

<p>
    <?= $item['description'] ?>
</p>

<p>
    Цена: <?= $item['price'] ?>p
    <?php if ($sale): ?>
        (Со скидкой <?= $sale ?>%: <?= $item['price'] - ($item['price'] * ($sale / 100)) ?>р)
    <?php endif ?>
</p>

<p>
    Осталось: <?= $item['quantity'] ?>
</p>

<p>
    <button class="btn btn-info" id="add-product" data-id="<?= $item['id'] ?>">
        Добавить в корзину
    </button>
</p>

<script src="/js/product.js" defer></script>