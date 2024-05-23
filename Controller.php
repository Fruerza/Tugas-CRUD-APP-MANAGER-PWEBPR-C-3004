<?php
require_once 'koneksi.php';
require_once 'course.php';

session_start();

class CourseController
{
    public function index()
    {
        $courses = Course::select();
        include 'views/courses/index.php';  
    }

    public function store($no_hp, $nama_guru, $gambar)
    {
        $result = Course::create($no_hp, $nama_guru, $gambar);
        if ($result) {
            echo "Data guru berhasil ditambahkan.";
        } else {
            echo "Gagal menambahkan data guru.";
        }
    }

    public function update($id_guru, $no_hp, $nama_guru, $gambar)
    {
        $result = Course::update($id_guru, $no_hp, $nama_guru, $gambar);
        if ($result) {
            echo "Data guru berhasil diperbarui.";
        } else {
            echo "Gagal memperbarui data guru.";
        }
    }

    public function destroy($id_guru)
    {
        $result = Course::delete($id_guru);
        if ($result) {
            echo "Data guru berhasil dihapus.";
        } else {
            echo "Gagal menghapus data guru.";
        }
    }
}

class UserController
{
    public function register($username, $password, $fullname)
    {
        global $conn;
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

    public function login($username, $password)
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
}

$courseController = new CourseController();
$userController = new UserController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $fullname = $_POST['fullname'];
        $userController->register($username, $password, $fullname);
    } elseif (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $userController->login($username, $password);
    } elseif (isset($_POST['store'])) {
        $no_hp = $_POST['no_hp'];
        $nama_guru = $_POST['nama_guru'];
        $gambar = $_FILES['gambar'];
        $courseController->store($no_hp, $nama_guru, $gambar);
    } elseif (isset($_POST['update'])) {
        $id_guru = $_POST['id_guru'];
        $no_hp = $_POST['no_hp'];
        $nama_guru = $_POST['nama_guru'];
        $gambar = $_FILES['gambar'];
        $courseController->update($id_guru, $no_hp, $nama_guru, $gambar);
    } elseif (isset($_POST['delete'])) {
        $id_guru = $_POST['id_guru'];
        $courseController->destroy($id_guru);
    }
}
?>
