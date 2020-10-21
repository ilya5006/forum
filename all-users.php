<?php
session_start();

require_once __DIR__ . '/php/isUserAdmin.php';
require_once __DIR__ . '/php/getAllUsers.php';

if (empty($_SESSION['id_user']) || ! isUserAdmin((int) $_SESSION['id_user'])) {
    header('Location: /');
}

$allUsers = getAllUsers((int) $_SESSION['id_user']);


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Все пользователи </title>
    <link rel="stylesheet" href="./css/base.css">
</head>
<body>
    
    <!-- меню сайта -->
    <header class="header">
        <h1> <a href="index.php"> МИНИ-ФОРУМ </a>  </h1>

        <div class="menu-wrapper">
            <ul class="user-menu">
                <li> <a href="./index.php"> Главная </a> </li>
                <li> <a href="./my-themes.php"> Ваши темы </a> </li>
                <li> <a href="./register.php"> Выход </a> </li>
            </ul>

            <ul class="admin-menu">
                <li> <a href="all-themes.php"> Все темы </a> </li>
                <li> <a href="all-users.php"> Все пользователи </a> </li>
            </ul>
        </div>

    </header>
    <!-- конец меню сайта -->

    <!-- секция со всеми пользователями  -->
    <div class="users">

        <div class="heading_wrapper">
            <h2 class="heading"> Все пользователи в системе </h2>
        </div>

        <!-- --- --> 
        
        <div class="user">
            <p class="user-name"> user07 </p>
            <p class="user-status"> Статус пользователя: <span>Не заблокирован</span> </p>
        </div>
        <div class="user-control">
            <a href="#" class="button"> Заблокировать </a>
            <a href="#" class="button"> Разблокировать </a>
        </div>

        <!-- --- --> 
        
        <div class="user">
            <p class="user-name"> user67 </p>
            <p class="user-status"> Статус пользователя: <span>Не заблокирован</span> </p>
        </div>
        <div class="user-control">
            <a href="#" class="button"> Заблокировать </a>
            <a href="#" class="button"> Разблокировать </a>
        </div>

        <!-- --- --> 

        <div class="user">
            <p class="user-name"> user27 </p>
            <p class="user-status"> Статус пользователя: <span>Заблокирован</span> </p>
        </div>
        <div class="user-control">
            <a href="#" class="button"> Заблокировать </a>
            <a href="#" class="button"> Разблокировать </a>
        </div>

    </div>
    <!-- конец секции со всеми пользователями -->



</body>
</html>