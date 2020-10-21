<?php

function getAllUsers(int $currentUserId)
{
    require_once __DIR__ . '/db.php';

    return ($db->query(
        "SELECT `users`.`id`, `users`.`email`, `users`.`first_name`, `users`.`last_name`, `status`.`name`
        FROM `users`, `status`
        WHERE `users`.`id` != $currentUserId AND `users`.`id_status` = `status`.`id`"
        )
    )->fetch_all(MYSQLI_ASSOC);
}
