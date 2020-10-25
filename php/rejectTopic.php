<?php
require_once __DIR__ . '/db.php';

$idTopic = (int) $_GET['id'];

$db->query(
    "UPDATE `topics` SET `id_status` = 3 WHERE `id` = $idTopic"
);

header('Location: /all-themes.php');
