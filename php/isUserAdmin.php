<?php

function isUserAdmin(mysqli $db, int $id)
{
    return ($db->query("SELECT `id_role` FROM `users` WHERE `id` = $id"))->fetch_assoc()['id_role'] == 1;
}