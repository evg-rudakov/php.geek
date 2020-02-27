<?php

require '../../engine/core.php';

function routeIndex() {
    onlyAdmin();

    echo render('admin/main', [], true, 'admin');
}

route();