<?php
session_start();

require_once __DIR__ . '/php/db.php';
require_once __DIR__ . '/php/getAllTopics.php';

$topics = getAllTopics($db);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Все темы </title>
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

    <!-- секция со всеми темами  -->
    <div class="themes">

        <div class="heading_wrapper">
            <h2 class="heading"> Все темы в системе </h2>
        </div>

        <!-- --- --> 

        <?php
        foreach ($topics as $topic):
        ?>
            <div class="theme">
                <h3> <?= $topic['title'] ?> </h3>
                <p class="theme-status"> Статус темы: <span><?= $topic['status']?></span> </p>
                <p class="theme-date"> Дата создания: <span><?= $topic['date'] ?></span> </p>
                <p class="pretext"> <?= $topic['text'] ?> </p>
            </div>

            <?php
            if ($topic['status'] == 'Ожидает модерацию'):
            ?>
                <div class="theme-control">
                    <a href="/php/acceptTopic.php?id=<?= $topic['id'] ?>" class="button"> Принять </a>
                    <a href="/php/rejectTopic.php?id=<?= $topic['id'] ?>" class="button"> Отклонить </a>
                </div>
            <?php
            endif;

        endforeach;
        ?>
    </div>
    <!-- конец секции со всеми темами -->



</body>
</html>