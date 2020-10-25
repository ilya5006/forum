<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Регистрация </title>
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
            <h2 class="heading"> Регистрация  </h2>
            <a href="login.php" class="button additional"> Есть аккаунт? Войти </a>
        </div>

        <!-- --- --> 

        <div class="errors">
            <p class="error"> Вы нерпавильно ввели почту </p>
            <p class="error"> Вы нерпавильно ввели пароль </p>
        </div>

        <!-- --- --> 

        <form class="auth" method="POST" action="/php/registration.php">
            <input type="email" name="email" placeholder="Введите уникальный email">

            <input type="text" name="first_name" placeholder="Введите имя">
            <input type="text" name="last_name" placeholder="Введите фамилию">

            <input type="password" name="password" placeholder="Введите пароль">

            <button class="button" name=""> Зарегистрироваться </button>
        </form>

    </div>

</body>
</html>