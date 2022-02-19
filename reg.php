<?php
session_start();
require_once 'connect.php';

    $yname = $_POST['yname'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $psw_repeat = $_POST['psw_repeat'];

    IF ($psw === $psw_repeat) {
        $sql="SELECT * FROM `users` WHERE `Login` = '$login'";
        //проверка логина на наличие в бд
            $lgn=mysqli_query($db, $sql);
            $rcn=mysqli_num_rows($lgn);
        IF ($rcn==0) {
            mysqli_query($db, "INSERT INTO `users` (`FiO`, `Login`, `E-mail`, `Password`) VALUES ('$yname', '$login', '$email', '$psw')");
                header('Location:vhod.php');
        } else {
            die('Такой логин уже существует');
        }
    } else {
        die('Пароли не совпадают');
    }
?> 