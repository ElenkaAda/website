<?php
session_start();

?>

<!doctype html>
<html lang="ru">
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
<form action="reg.php" method="POST">
    <div class="container">
      <h1><b><p>Регистрация</p></b></h1>

      <label for="yname"><b>ФИО</b></label>
      <input type="text" placeholder="Введите ФИО, только кириллица" name="yname" pattern="^[А-Яа-яЁё\s]+$" required>
    </br>
      <label for="login"><b>Логин</b></label>
      <input type="text" placeholder="Введите логин, только латиница" name="login" pattern="^[a-zA-Z\s]+$" required>
    </br>
    <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Введите электронную почту" name="email" required>
    </br>
      <label for="psw"><b>Пароль</b></label>
      <input type="password" placeholder="Введите пароль" name="psw" required>
    </br>
      <label for="psw_repeat"><b>Повторите пароль</b></label>
      <input type="password" placeholder="Повторите пароль" name="psw_repeat" required>
    </br>
    <input type="checkbox" required > Нажимая кнопку "Регистрация" вы даёте свое согласие на обработку введенной персональной информации
    </br>
    <input type="submit" name="registerbtn" value="Регистрация">  
    </div>
    <div class="signin">
      <p>Уже есть аккаунт? <a href="vhod.php">Войдите</a></p>
    </div>
  </form>
</body>