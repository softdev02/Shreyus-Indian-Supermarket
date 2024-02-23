<?php
class User {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function authenticate($username, $password) {
        $username = $this->conn->real_escape_string($username);
        $password = $this->conn->real_escape_string($password);
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = $this->conn->query($sql);
        if ($result && $result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }
   
}