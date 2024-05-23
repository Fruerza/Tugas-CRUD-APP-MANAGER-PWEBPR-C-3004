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
        $target_file = self::uploadImage($gambar);
        $sql = "INSERT INTO guru (no_hp, nama_guru, gambar) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss', $no_hp, $nama_guru, $target_file);
        $stmt->execute();
        $result = $stmt->affected_rows > 0;
        $stmt->close();
        return $result;
    }

    static function update($id_guru, $no_hp, $nama_guru, $gambar)
    {
        global $conn;
        $target_file = self::uploadImage($gambar);
        $sql = "UPDATE guru SET no_hp=?, nama_guru=?, gambar=? WHERE id_guru=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssi', $no_hp, $nama_guru, $target_file, $id_guru);
        $stmt->execute();
        $result = $stmt->affected_rows > 0;
        $stmt->close();
        return $result;
    }

    static function delete($id_guru)
    {
        global $conn;
        $sql = "DELETE FROM guru WHERE id_guru=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $id_guru);
        $stmt->execute();
        $result = $stmt->affected_rows > 0;
        $stmt->close();
        return $result;
    }

    static function uploadImage($gambar)
    {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($gambar["name"]);
        move_uploaded_file($gambar["tmp_name"], $target_file);
        return $target_file;
    }
}

class User
{
    static function register($username, $password, $fullname)
    {
        global $conn;
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (username, password, fullname) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss', $username, $hashed_password, $fullname);

        if ($stmt->execute()) {
            $result = true;
        } else {
            $result = false;
        }
        $stmt->close();
        return $result;
    }

    static function login($username, $password)
    {
        global $conn;
        $query = "SELECT * FROM user WHERE username = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                return $user;
            } else {
                return null;
            }
        } else {
            return null;
        }
    }
}
?>
