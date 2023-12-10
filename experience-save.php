<?php
require_once('koneksi/database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $perusahaan = $_POST['nama_perusahaan'];
    $jabatan = $_POST['jabatan'];
    $mulai = $_POST['mulai'];
    $akhir = $_POST['akhir'];
    $deskripsi = $_POST['deskripsi'];

    $query = "INSERT INTO penglaman(nama_perusahaan,jabatan,mulai,akhir,deskripsi) VALUES('{$perusahaan}','{$jabatan}', '{$mulai}','{$akhir}','{$deskripsi}')";
    $result = mysqli_query($connectDb, $query);
    mysqli_close($connectDb);

    if ($result) {
        header('location:manajemen-pengalaman.php?tambah=sukses');
    } else {
        header('location:manajemen-pengalaman.php?tambah=gagal');
    }
} else {
    header('location:manajemen-pengalaman.php');
}