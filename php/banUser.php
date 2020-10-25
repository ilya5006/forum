<?php

require_once __DIR__ . '/db.php';

$idUser = (int) $_GET['id'];

$db->query("UPDATE `users` SET `id_status` = 2 WHERE `id` = $idUser");

header('Location: /all-users.php');
