<?php 
function getTopic(mysqli $db, int $id)
{
    return (($db->query("SELECT * FROM `topics` WHERE `id` = $id"))->fetch_assoc());
}
