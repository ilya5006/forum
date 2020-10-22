<?php
session_start();

require_once __DIR__ . '/db.php';

$idUser = (int) $_SESSION['id_user'];
$idTopic = (int) $_POST['id_topic'];
$commentText = $db->escape_string(htmlentities(trim($_POST['comment_text'])));

$db->query("INSERT INTO `topic_comments` VALUES (null, $idUser, $idTopic, '$commentText', NOW())");

header("Location: /theme.php?id={$idTopic}");
