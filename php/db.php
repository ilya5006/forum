<?php

try {
    $db = new mysqli('127.0.0.1', 'root', '', 'forum');
} catch (Exception $e) {
    echo 'Не судьба...';
}