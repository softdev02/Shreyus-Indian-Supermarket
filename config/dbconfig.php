<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "shreyus_super_market";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
