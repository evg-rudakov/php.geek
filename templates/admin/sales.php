<?php
/**
 * @var array $sales
 */
?>
<div class="row">
    <div class="col-6"><h1>Скидки</h1></div>
    <div class="col-6 text-right">
        <a href="/admin/sales.php?action=add" class="btn btn-info">Добавить</a>
    </div>
</div>

<table class="table">
    <tr>
        <th>ID</th>
        <th>Рамер (%)</th>
        <th>Срок окончания</th>
    </tr>

    <?php foreach ($sales as $x) : ?>
    <tr id="order-<?= $x['id'] ?>">
        <td><?= $x['id'] ?></td>
        <td><?= $x['sale_size'] ?></td>
        <td><?= date('d M Y', strtotime($x['active_till'])) ?></td>
    </tr>
    <?php endforeach; ?>
</table>