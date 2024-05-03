<?php
require_once 'koneksi.php';


if(isset($_POST["tambah_guru"])){
    $no_hp = $_POST["no_hp"];

    // if(!filter_var($no_hp, FILTER_VALIDATE_INT) || strlen($no_hp) != 12) {
    //     echo "<script>alert('Invalid phone number'); window.location.href='createform.php';</script>";
    //     exit;
    // }

    $nama_guru = mysqli_real_escape_string($conn, $_POST["nama_guru"]);
    $gambar = $_FILES["gambar"]["name"]; 
    $lokasi = $_FILES["gambar"]["tmp_name"];

    $gambar = htmlspecialchars($gambar);
    
    
    if (empty($no_hp)) {
        echo "<script>alert('Tidak boleh kosong');window.location.href='createform.php';</script>";
        exit();
    }
    if (empty($nama_guru)) {
        echo "<script>alert('Tidak boleh kosong');;window.location.href='createform.php';</script>";
        exit();
    }

    move_uploaded_file($lokasi, "uploads/" . $gambar);

    if($no_hp == "" || empty($no_hp)){
        header("Location:index.php");
    }
    else {
        $query = "INSERT INTO guru(no_hp, nama_guru, gambar) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('iss', $no_hp, $nama_guru, $gambar);
        $stmt->execute();

        if(!$stmt) {
            die("Failed to insert".mysqli_error($conn));
        }
        else {
            echo "<script>alert('Data berhasil dibuat'); window.location.href='routes.php?route=index';</script>";
        }
        $stmt->close();
    }
}
?>