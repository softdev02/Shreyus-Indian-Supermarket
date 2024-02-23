<?php

$current_url = $_SERVER['REQUEST_URI'];
if (strpos($current_url, '/admin') !== false) {
    header('Location: ../admin-login');
    exit();
}
?>