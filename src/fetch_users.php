<?php
session_start();
include './config/dbconfig.php';

function fetchAllUsers($conn) {
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    $users = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }
    return $users;
}

$users = fetchAllUsers($conn);
?>
