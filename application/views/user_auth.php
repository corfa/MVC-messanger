<link rel="stylesheet" type="text/css" href="/css/user_input.css" />
<form class="login-form"  method="POST" action="/user/auth">
        <h2>Авторизация</h2>
        <div class="form-group">
          <label for="username">Логин:</label>
          <input type="text" id="username" name="login" required>
        </div>
        <div class="form-group">
          <label for="password">Пароль:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" name="subm">Войти</button>
      </form>
      
      