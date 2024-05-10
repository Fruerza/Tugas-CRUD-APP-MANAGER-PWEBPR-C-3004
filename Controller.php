<?php
require_once 'course.php';

class CourseController
{
    public function index()
    {
        $courses = Course::select();
        // Lakukan sesuatu dengan data yang diperoleh, misalnya kirim ke tampilan
        // Contoh:
        // include 'view_courses.php';
    }

    public function store($no_hp, $nama_guru, $gambar)
    {
        $result = Course::create($no_hp, $nama_guru, $gambar);
        // Lakukan sesuatu berdasarkan hasil operasi penyimpanan, misalnya kirim pesan ke tampilan
        // Contoh:
        // if ($result) {
        //     echo "Data guru berhasil disimpan!";
        // } else {
        //     echo "Gagal menyimpan data guru.";
        // }
    }

    public function update($id_guru, $no_hp, $nama_guru, $gambar)
    {
        $result = Course::update($id_guru, $no_hp, $nama_guru, $gambar);
        // Lakukan sesuatu berdasarkan hasil operasi pembaruan, misalnya kirim pesan ke tampilan
    }

    public function destroy($id_guru)
    {
        $result = Course::delete($id_guru);
    
    }
}

$controller = new CourseController();


?>
