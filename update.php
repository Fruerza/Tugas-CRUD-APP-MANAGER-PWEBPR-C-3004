<?php require_once('koneksi.php'); ?>

<?php
if(isset($_POST['update_guru'])) {
    $id_guru = $_GET['id'];
    $no_hp_baru = $_POST['no_hp'];
    $nama_guru_baru = $_POST['nama_guru'];
    $gambar_baru = $_FILES["gambar"]["name"];
    $lokasi = $_FILES["gambar"]["tmp_name"];

    move_uploaded_file($lokasi, "uploads/" . $gambar_baru);

    $query = "UPDATE guru SET no_hp = ?, nama_guru = ?, gambar = ? WHERE id_guru = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sssi', $no_hp_baru, $nama_guru_baru, $gambar_baru, $id_guru);
    $stmt->execute();

    if($stmt->affected_rows > 0) {
        echo "<script>alert('Data berhasil diupdate.'); window.location.href='routes.php?route=index';</script>";
        exit();
    } else {
        echo "Gagal melakukan update: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Tidak ada permintaan update yang valid.";
}
?>
