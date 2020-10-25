<?php

session_start();

require_once __DIR__ . '/db.php';

$topicTitle = $db->escape_string(htmlentities(trim($_POST['topic_title'])));
$topicText = $db->escape_string(htmlentities(trim($_POST['topic_text'])));
$idUser = (int) $_SESSION['id_user'];

if (empty($topicTitle)) {
    header('Location: /create-theme.php?error=Введите+заголовок+темы');
    return ;
}

if (empty($topicText)) {
    header('Location: /create-theme.php?error=Введите+текст+темы');
    return ;
}


if (! $db->query("INSERT INTO `topics` VALUES (null, {$idUser}, 1, '{$topicTitle}', '{$topicText}', NOW())")) {
    header('Location: /create-theme.php?error=Произошла+ошибка+попробуйте+снова');
}

$topicId = (int) ($db->query("SELECT `id` FROM `topics` ORDER BY `id` DESC LIMIT 1"))->fetch_assoc()['id'];

header("Location: /theme.php?id={$topicId}");