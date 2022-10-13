<h1>Регистрация</h1>
<form method="POST">
    <div class="form-group">
        <label for="login">Логин</label>
        <input name="login" type="text" placeholder="Логин" required ><br>
        <div class="form-control-feedback"></div>
    </div>
    <div class="form-group">
        <label for="password">Пароль</label>
        <input name="password" type="password" placeholder="Пароль" required><br>
        <div class="form-control-feedback"></div>
    </div>
    <div class="form-group">
        <label for="password_repeat">Повтор пароля</label>
        <input name="password_repeat" type="password" placeholder="Повтор пароля" required><br>
        <div class="form-control-feedback"></div>
    </div>
    <button name="submit" type="submit" class="btn btn-primary">Зарегистрироваться</button>
</form>