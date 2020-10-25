<?php
session_start();

require_once __DIR__ . '/php/db.php';
require_once __DIR__ . '/php/isUserAdmin.php';
require_once __DIR__ . '/php/getAllUsers.php';

if (empty($_SESSION['id_user']) || ! isUserAdmin($db, (int) $_SESSION['id_user'])) {
    header('Location: /');
}

$users = getAllUsers($db, (int) $_SESSION['id_user']);
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

    <!-- секция со всеми пользователями  -->
    <div class="users">

        <div class="heading_wrapper">
            <h2 class="heading"> Все пользователи в системе </h2>
        </div>

        <?php
        foreach ($users as $user):
        ?>
            <div class="user">
                <p class="user-name"> <?= $user['email'] ?> </p>
                <p class="user-status"> Статус пользователя: <span><?= $user['status']?></span> </p>
            </div>
            <div class="user-control">
                <a href="/php/banUser.php?id=<?= $user['id'] ?>" class="button"> Заблокировать </a>
                <a href="/php/unbanUser.php?id=<?= $user['id'] ?>" class="button"> Разблокировать </a>
            </div>
        <?php
        endforeach;
        ?>
    </div>
    <!-- конец секции со всеми пользователями -->
</body>
</html>