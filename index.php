<?php
session_start();

require_once __DIR__ . '/php/db.php';
require_once __DIR__ . '/php/getAllModeratedTopics.php';

$topics = getAllModeratedTopics($db);

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

    <!-- секция с темами -->
    <div class="themes">

        <?php
        foreach ($topics as $topic):
        ?>
            <div class="theme">
                <h3> <a href="./theme.php?id=<?= $topic['id'] ?>"> <?= $topic['title'] ?> </a> </h3>
                <p class="reply-count"> Количество ответов в теме: <span><?= $topic['comments_count'] ?></span> </p>
                <p class="pretext"> <?= $topic['text'] ?> </p>
            </div>
        <?php
        endforeach;
        ?>
    </div>
    <!-- конец секции с темами-->
</body>
</html>