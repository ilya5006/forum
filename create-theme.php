<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Создать тему </title>
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
                <?php if (isset($_SESSION['id_user'])):?>
                    <li> <a href="/php/logout.php"> Выход </a> </li>
                <?php else: ?>
                    <li> <a href="./login.php"> Вход </a> </li>
                <?php endif; ?>
            </ul>

            <ul class="admin-menu">
                <li> <a href="all-themes.php"> Все темы </a> </li>
                <li> <a href="all-users.php"> Все пользователи </a> </li>
            </ul>
        </div>

    </header>
    <!-- конец меню сайта -->

    <!-- секция с формой создания темы -->
    <div class="themes">

        <div class="heading_wrapper">
            <h2 class="heading"> Создание новой темы  </h2>
        </div>

        <!-- --- --> 
        
        <form class="create-theme" method="POST" action="/php/createTopic.php">
            <input type="text" name="topic_title" placeholder="Введите название темы">
            <textarea name="topic_text"> Введите текст темы </textarea>
            <button class="button" name=""> Создать новую тему </button>
        </form>
    </div>
    <!-- конец секции формы создания темы-->
</body>
</html>