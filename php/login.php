<?php
session_start();

require_once __DIR__ . '/db.php';

$email = $db->escape_string(htmlentities(trim($_POST['email'])));
$password = $db->escape_string(htmlentities(trim($_POST['password'])));

$idAndPassword = ($db->query("SELECT `id`, `password` FROM `users` WHERE `email` = '{$email}'"))->fetch_assoc();

if (empty($idAndPassword)) {
    header('Location: /login.php?error=Неверный+email');

    return ;
}

if (! password_verify($password, $idAndPassword['password'])) {
    header('Location: /login.php?error=Неверный+пароль');

    return ;
}

$_SESSION['id_user'] = (int) $idAndPassword['id'];

header('Location: /');
