<?php
function getAllModeratedTopics(mysqli $db)
{
    return (
        $db->query(
            "SELECT
                `topics`.*,
                (
                SELECT
                    COUNT(*)
                FROM
                    `topic_comments`
                WHERE
                    `topic_comments`.`id_topic` = `topics`.`id`
                ) AS `comments_count`
            FROM
                `topics`
            WHERE
                `id_status` = 2"
        )
    )->fetch_all(MYSQLI_ASSOC);
}