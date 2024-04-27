<?php
require_once'course.php';

if(isset($_POST["tambah_guru"])){

    $nhp = $_POST["no_hp"];
    $nguru = $_POST["nama_guru"];

    if($nhp == "" || empty($nhp)){
        header("Location:dashboard.php");

    }
    else {
        $query = "INSERT INTO guru(no_hp, nama_guru) VALUES ('$nhp', '$nguru')";
        $hasil = mysqli_query($conn,$query);
        if(!$hasil){
            die("Failed to insert".mysqli_error($conn));
        }

        else{
            header('Location:dashboard.php');
        }
    }
    
}

