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

    static function create($no_hp, $nama_guru)
    {
        global $conn;
        $sql = "INSERT INTO guru($no_hp, $nama_guru) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssis', $no_hp, $nama_guru);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }
}



?>
