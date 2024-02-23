<?php
include '../config/dbconfig.php';
include './models/users.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userModel = new User($conn);
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $user = $userModel->authenticate($username, $password);
    if ($user) {
        session_start();
        $_SESSION['Username'] = $username;
        header("Location: ../dashboard");
    } else {
        header("Location: ../admin-login?error=" . base64_encode('invalid username or passowrd'));
    }
}

$conn->close();
?>
