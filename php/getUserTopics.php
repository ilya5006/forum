<?php

function getUserTopics(mysqli $db, int $idUser)
{
    return (
        $db->query(
            "SELECT `topics`.*, `topic_status`.`name` AS `status` FROM `topics`, `topic_status` WHERE `topics`.`id_user` = $idUser AND `topics`.`id_status` = `topic_status`.`id`"
        )
    )->fetch_all(MYSQLI_ASSOC);
}