<?php 
require_once 'koneksi.php';

if(isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']); 

    $query = "DELETE FROM guru WHERE id_guru = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $id);
    $stmt->execute();

    if(!$stmt) {
        die("query failed" . mysqli_error($conn));
    } else {
        echo "<script>alert('Data berhasil dihapus.'); window.location.href='routes.php?route=index';</script>";
    }
    $stmt->close();
}

