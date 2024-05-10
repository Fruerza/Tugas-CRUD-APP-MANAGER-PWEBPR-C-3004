<?php
require_once 'koneksi.php';

session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();


        if (password_verify($password, $user['password'])) {

            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit(); 
        } else {
            $error_message = "Password salah";
            header("Location: landingpages.php?error=" . urlencode($error_message));
            exit();
        }
    } else {
        $error_message = "Username tidak ditemukan";
        header("Location: landingpages.php?error=" . urlencode($error_message));
        exit();
    }
}
?>
