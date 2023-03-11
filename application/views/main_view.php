<link rel="stylesheet" type="text/css" href="/css/user_input.css" />

<div style="text-align: center;">
  <h1 style="font-size: 48px; font-weight: bold; color: #333;">Моя Работа по PHP</h1>
  <p style="font-size: 24px; color: #666;">небольшой мессенджер на архитектуре MVC :)</p>
</div>

<form class="login-form" method="POST" action="/user/create">
        <h2>Регистрация</h2>
        <div class="form-group">
          <label for="username">Логин:</label>
          <input type="text" id="username" name="login" required>
        </div>
        <div class="form-group">
          <label for="password">Пароль:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" name="subm">Создать</button>
      </form>
      
      