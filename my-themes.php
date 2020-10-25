<?php
session_start();

if (empty($_SESSION['id_user'])) {
    header('Location: /');
}

require_once __DIR__ . '/php/db.php';
require_once __DIR__ . '/php/getUserTopics.php';

$topics = getUserTopics($db, (int) $_SESSION['id_user']);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ваши темы </title>
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

    <!-- секция со своими -->
    <div class="themes">

        <div class="heading_wrapper">
            <h2 class="heading"> Ваши темы </h2>
            <a href="./create-theme.php" class="button additional"> Создать новую тему </a>
        </div>

        <?php
        foreach ($topics as $topic):
        ?>
            <div class="theme">
                <h3> <?= $topic['title'] ?> </h3>
                <p class="theme-status"> Статус темы: <span><?= $topic['status'] ?></span> </p>
                <p class="theme-date"> Дата создания: <span><?= (new DateTime($topic['date']))->format('Y-m-d H:i') ?></span> </p>
                <p class="pretext"> <?= $topic['text'] ?> </p>
            </div>
        <?php
        endforeach;
        ?>
    </div>
    <!-- конец секции со своими темами -->



</body>
</html>