<?php
/** @var array $orders */
?>
<h1>Мои заказы</h1>

<table class="table">
    <tr>
        <th>Номер</th>
        <th>Дата заказа</th>
        <th>Статус</th>
    </tr>

    <?php foreach ($orders as $x) : ?>
        <tr>
            <td><?= $x['id'] ?></td>
            <td><?= $x['created_at'] ?></td>
            <td class="field-status"><?= ($x['status'] == 0) ? 'В обработке' : 'Проведен' ?></td>
        </tr>
    <?php endforeach; ?>
</table>