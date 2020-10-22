<?php
function getTopicComments(mysqli $db, int $id)
{
    return (
        $db->query(
        "SELECT 
            `topic_comments`.*,
            `users`.`first_name` 
        FROM `topic_comments`, `users`
        WHERE 
            `id_topic` = $id 
            AND 
            `topic_comments`.`id_user` = `users`.`id`"
        )
    )->fetch_all(MYSQLI_ASSOC);
}
