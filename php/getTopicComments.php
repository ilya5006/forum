<?php 
    require_once __DIR__ . '/db.php';

function getTopicComments(int $id)
{

    $comments = $db->query("SELECT * FROM `topic_comments` WHERE `id_topic` = $id");

    if ($comments) {
        return ($comments)->fetch_all(MYSQLI_ASSOC);
    }
}
