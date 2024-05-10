<?php
require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (username, password, fullname) VALUES (?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    
    $stmt->bind_param('sss', $username, $hashed_password, $fullname);
    
    if ($stmt->execute()) {
        echo "<script>alert('Data berhasil dibuat'); window.location.href='landingpages.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $stmt->close();
}