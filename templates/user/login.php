<h1>Войти в систему</h1>

<div class="mt-5">
    <form method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Login</label>
            <input name="login" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter login">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Пароль</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group form-check">
            <input name="remember" type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Запомнить меня</label>
        </div>
        <button type="submit" name="login_user" class="btn btn-primary">Вход</button>
        <a href="/user.php?action=register" class="btn btn-success">Регистрация</a>
    </form>
</div>