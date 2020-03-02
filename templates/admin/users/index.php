<?php
/**
 * @var array $users
 */
?>
<div class="row">
    <div class="col-6"><h1>Пользователи</h1></div>
</div>

<table class="table">
    <tr>
        <th>ID</th>
        <th>login</th>
        <th>ссылка</th>
    </tr>

    <?php foreach ($users as $user) : ?>
    <tr id="user-<?= $user['id'] ?>">
        <td><?= $user['id'] ?></td>
        <td><?= $user['login'] ?></td>
        <td><a href="/admin/users.php?action=view&id=<?=$user['id']?>">Подробнее</a></td>
    </tr>
    <?php endforeach; ?>
</table>
