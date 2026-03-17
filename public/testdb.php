<?php
$mysqli = new mysqli('127.0.0.1', 'moodleuser', 'password123', 'moodle', 3306);

if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}
echo 'Connected successfully to MariaDB!';
?>