<?php
/**
 * @var array $user
 */
?>
<div class="row">
    <div class="col-6"><h1>Пользователь <?= $user['login'] ?></h1></div>
</div>

<table class="table">
    <tr>
        <th>ID</th>
        <th>login</th>
    </tr>
    <tr id="user-<?= $user['id'] ?>">
        <td><?= $user['id'] ?></td>
        <td><?= $user['login'] ?></td>
    </tr>
</table>
