<div class="row mt-5">
    <div class="col-6">
        <h2 class="mb-5">Пример GET</h2>

        <ul>
            <li>URL: <code>/ajax.php</code></li>
            <li>Method: <code>GET</code></li>
            <li>Data: <code>null</code></li>
            <li>
                <button class="btn btn-info" id="btn-simple">Execute</button>
            </li>
        </ul>
    </div>
    <div class="col-6">
        <h2 class="mb-5">Пример GET</h2>

        <ul>
            <li>URL: <code>/ajax.php?action=jsonitem</code></li>
            <li>Method: <code>GET</code></li>
            <li>Data: <code>{action: 'jsonitem'}</code></li>
            <li>
                <button class="btn btn-info" id="btn-jsonitem">Execute</button>
            </li>
        </ul>
    </div>
</div>

<hr>

<div class="row mt-5">
    <div class="col-6">
        <h2 class="mb-5">Пример POST</h2>

        <ul>
            <li>URL: <code>/ajax.php?action=input</code></li>
            <li>Method: <code>POST</code></li>
            <li>Data: <code>{message: 'hello-from-ajax!'}</code></li>
            <li>
                <button class="btn btn-info" id="btn-post-simple">Execute</button>
            </li>
        </ul>
    </div>
    <div class="col-6">
        <h2 class="mb-5">Пример POST</h2>

        <ul>
            <li>URL: <code>/ajax.php?action=object</code></li>
            <li>Method: <code>POST</code></li>
            <li>Data: <code>{user: {login: 'John', password: '123123'}}</code></li>
            <li>
                <button class="btn btn-info" id="btn-post-jsonitem">Execute</button>
            </li>
        </ul>
    </div>
</div>

<script defer src="/js/ajax.js"></script>