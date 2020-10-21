<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Главная страница </title>
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

    <!-- секция с темами -->
    <div class="themes">
        <!-- <h2 class="heading"> Все темы </h2> -->

        <div class="theme">
            <h3> <a href="./theme.php"> Заголовок темы 1 </a> </h3>
            <p class="reply-count"> Количество ответов в теме: <span>23</span> </p>
            <p class="pretext"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid accusantium consequatur aut tempore exercitationem maiores adipisci ea voluptatum deleniti quisquam, neque quod. Repellendus aliquam incidunt tempore mollitia beatae non repudiandae! </p>
        </div>
        
        <!-- --- --> 
        
        <div class="theme">
            <h3> <a href="./index.php"> Заголовок темы 2 </a> </h3>
            <p class="reply-count"> Количество ответов в теме: <span>14</span> </p>
            <p class="pretext"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid accusantium consequatur aut tempore exercitationem maiores adipisci ea voluptatum deleniti quisquam, neque quod. Repellendus aliquam incidunt tempore mollitia beatae non repudiandae! </p>
        </div>

    </div>
    <!-- конец секции с темами-->
</body>
</html>