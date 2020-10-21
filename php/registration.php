<?php

session_start();

require_once __DIR__ . '/db.php';

$email = $db->escape_string(htmlentities(trim($_POST['email'])));
$firstName = $db->escape_string(htmlentities(trim($_POST['first_name'])));
$lastName = $db->escape_string(htmlentities(trim($_POST['last_name'])));
$password = $db->escape_string(htmlentities(trim($_POST['password'])));

if (empty($email)) {
    header('Location: /register.php?error=Введите+email');
    return ;
}

if (empty($firstName)) {
    header('Location: /register.php?error=Введите+имя');
    return ;
}

if (empty($lastName)) {
    header('Location: /register.php?error=Введите+фамилию');
    return ;

}

if (empty($password)) {
    header('Location: /register.php?error=Введите+пароль');
    return ;
}

$emailCheck = $db->query("SELECT `id` FROM `users` WHERE `email` = '{$email}'");

if (isset(($emailCheck->fetch_assoc())['id'])) {
    header('Location: /register.php?error=Такой+email+уже+занят');
    return ;
}

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

if ($db->query("INSERT INTO `users` VALUES (null, '{$email}', '{$firstName}', '{$lastName}', '{$passwordHash}')")) {
    $id = ($db->query("SELECT `id` FROM `users` ORDER BY `id` DESC LIMIT 1"))->fetch_assoc()['id'];

    $_SESSION['id_user'] = (int) $id;

    header('Location: /');
}
