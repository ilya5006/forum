<?php
session_start();

require_once __DIR__ . '/php/db.php';

include __DIR__ . '/php/getTopic.php';
include __DIR__ . '/php/getTopicComments.php';

$topicComments = getTopicComments($db, (int) $_GET['id']);

$topicInfo = getTopic($db, (int) $_GET['id']);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Страница с темой </title>
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

    <!-- секция с ОДНОЙ темой -->
    <div class="themes">

        <div class="heading_wrapper">
            <h2 class="heading"> <?= $topicInfo['title'] ?> </h2>
            <h2 class="additional"> Дата создания: <span> <?= (new DateTime($topicInfo['date']))->format('Y-m-d H:i') ?> </span> </h2>
        </div>

        <!-- --- --> 

        <div class="theme">
            <p class="text"> <?= $topicInfo['text'] ?> </p>
        </div>

        <!-- --- --> 

        <?php
        foreach ($topicComments as $comment):
        ?>

            <div class="reply">
                <p class="text"> <?= $comment['text'] ?> </p>
                <p class="reply-info"> ответил <span class="user-name"> <?=$comment['first_name'] ?> </span> в <span class="date"> <?= (new DateTime($comment['date']))->format('Y-m-d H:i') ?> </span> </p>
            </div>

        <?php
        endforeach;
        ?>
        
        <?php
        if (isset($_SESSION['id_user'])):
        ?>
            <form class="form-reply" method="POST" action="/php/createComment.php">
                <input type="hidden" value="<?=(int) $_GET['id']?>" name="id_topic">
                <input type="hidden" value="<?=(int) $_SESSION['id_user']?>" name="id_user">
                <textarea name="comment_text"> Введите сообщение </textarea>
                <button class="button" name=""> Отправить </button>
            </form>
        <?php
        endif;
        ?>
    </div>
    <!-- конец секции одной темой-->
</body>
</html>