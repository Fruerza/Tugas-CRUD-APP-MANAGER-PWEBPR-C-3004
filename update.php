<?php
include("koneksi.php");

if(isset($_GET['id'])) {
    $id_guru = $_GET['id'];

    if(isset($_POST['submit'])) {
        $no_hp_baru = $_POST['no_hp'];
        $nama_guru_baru = $_POST['nama_guru'];

        $update_query = "UPDATE guru SET no_hp = '$no_hp_baru', nama_guru = '$nama_guru_baru' WHERE id_guru = $id_guru";
        $update_result = mysqli_query($con, $update_query);

        if($update_result) {
            header("Location: dashboard.php?update_msg=Data berhasil diupdate");
            exit();
        } else {
            echo "Gagal melakukan update: " . mysqli_error($con);
        }
    }
} else {
    echo "ID guru tidak ditemukan";
}
