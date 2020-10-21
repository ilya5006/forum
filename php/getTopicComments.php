<?php 

function getTopicComments(int $id)
{
    require_once __DIR__ . '/db.php';
    
    return ($db->query("SELECT * FROM `topic_comments` WHERE `id_topic` = $id"))->fetch_all(MYSQLI_ASSOC);
}
