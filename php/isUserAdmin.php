<?php

function isUserAdmin(int $id)
{
    require_once __DIR__ . '/db.php';

    return ($db->query("SELECT `id_role` FROM `users` WHERE `id` = $id"))->fetch_assoc()['id'] == 1;
}