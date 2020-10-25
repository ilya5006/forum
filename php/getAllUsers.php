<?php

function getAllUsers(mysqli $db, int $currentUserId)
{
    return ($db->query(
        "SELECT `users`.`id`, `users`.`email`, `users`.`first_name`, `users`.`last_name`, `status`.`name` AS `status`
        FROM `users`, `status`
        WHERE `users`.`id` != $currentUserId AND `users`.`id_status` = `status`.`id`"
        )
    )->fetch_all(MYSQLI_ASSOC);
}
