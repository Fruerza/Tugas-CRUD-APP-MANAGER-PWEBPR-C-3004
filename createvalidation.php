<?php 

$no_hp = null;
$no_hp_error = null;
$nama_guru = null;
$nama_guru_error = null;
$success = null;

if(isset( $_POST['Create'])){

    $no_hp = $_POST['no_hp'];
    $nama_guru = $_POST['nama_guru'];

    if(empty(trim($no_hp))) {
         $no_hp_error = "Masukkan No Handphone";
    } else {
        if(empty(trim($nama_guru))) {
             $nama_guru_error = "Masukkan Nama Guru";
        } else {
             $success = "Data Telah Ditambahkan ";
        }
    }

}


?>