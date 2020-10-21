<?php 

function getTopic(int $id)
{
    require_once __DIR__ . '/db.php';

    return ($db->query("SELECT * FROM `topics` WHERE `id` = $id"))->fetch_assoc();
}
