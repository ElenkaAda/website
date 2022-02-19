<php
session_start();

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
  <img class="navlogo" src="logo.png" alt="лого" >
  <button class="nav">
    <a class="nav" href="index.php">Главная страница</a>
  </button>
</header>
<body>
<form action="auth.php" method="POST">
    <div class="container">
      <h1><b><p>Вход</p></b></h1>
      <label for="login"><b>Логин</b></label>
      <input type="text" placeholder="Введите логин, только латиница" name="login" pattern="^[a-zA-Z\s]+$" required>
    </br>
      <label for="psw"><b>Пароль</b></label>
      <input type="password" placeholder="Введите пароль" name="psw" required>
    </br>
    <input type="submit" name="vhod" value="Вход">   
    </div>
    <div class="signin">
        <p>Еще нет аккаунта? <a href="reg-form.php">Зарегистрируйтесь</a></p>
      </div>
    </form>
</body>
</html>