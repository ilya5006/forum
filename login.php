<?php
session_start();
if (isset($_SESSION['id_user'])) {
    header('Location: /');
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Авторизация </title>
    <link rel="stylesheet" href="./css/base.css">
</head>
<body>
    
    <!-- меню сайта -->
    <header class="header">
        <h1> <a href="index.php"> МИНИ-ФОРУМ </a> </h1>
    </header>
    <!-- конец меню сайта -->


    <div class="themes">

        <div class="heading_wrapper">
            <h2 class="heading"> Авторизация </h2>
            <a href="register.php" class="button additional"> Нет аккаунта? Зарегистрироваться </a>
        </div>

        <!-- --- --> 
        
        <div class="errors">
            <p class="error"> Вы нерпавильно ввели почту </p>
            <p class="error"> Вы нерпавильно ввели пароль </p>
        </div>

        <!-- --- --> 

        <form class="auth" method="POST" action="/php/login.php">
            <input type="email" name="email" placeholder="Введите email">

            <input type="password" name="password" placeholder="Введите пароль">

            <button class="button" name=""> Войти </button>
        </form>

    </div>

</body>
</html>