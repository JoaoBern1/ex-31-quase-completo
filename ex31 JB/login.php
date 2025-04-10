<?php
include 'db.php';

if($_SESSION["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss, $username, $password");
    $stmt->execute();
    $result = $stmt
}