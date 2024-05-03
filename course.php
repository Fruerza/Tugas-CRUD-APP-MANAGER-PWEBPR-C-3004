<?php
require_once 'koneksi.php';

class Course
{
    static function select()
    {
        global $conn;
        $sql = "SELECT * FROM guru";
        $result = mysqli_query($conn, $sql);
        $data = array();
        if ($result->num_rows > 0) {
            while ($a = $result->fetch_array()) {
                $data[] = $a;
            }
        }
        return $data;
    }

    static function create($no_hp, $nama_guru, $gambar)
    {
        global $conn;
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($gambar["name"]);
        move_uploaded_file($gambar["tmp_name"], $target_file);
        $gambar = $target_file;
        $sql = "INSERT INTO guru($no_hp, $nama_guru, $gambar) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssis', $no_hp, $nama_guru, $gambar);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }

    static function update($id_guru, $no_hp, $nama_guru, $gambar) {
        global $conn;
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($gambar["name"]);
        move_uploaded_file($gambar["tmp_name"], $target_file);
        $gambar = $target_file;
        $stmt = $conn->prepare("UPDATE guru SET no_hp=?, nama_guru=?, gambar=? WHERE id_guru=?");
        $stmt->bind_param("ssss", $no_hp, $nama_guru, $gambar, $id_guru);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
      }

    static function delete($id_guru)
    {
        global $conn;
        $query = "DELETE FROM guru WHERE id_guru=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('i', $id_guru);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }

    function uploadImage($gambar) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($gambar["name"]);
        move_uploaded_file($gambar["tmp_name"], $target_file);
        return $target_file;
    }
}



?>
