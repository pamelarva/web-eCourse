<?php 
    include "koneksi.php";
    $id = $_GET['id_user'];

    $sql = "DELETE FROM signup WHERE id_user='$id'";
    $hasil = mysqli_query($koneksi, $sql);

    if ($hasil) {
        echo "<script>alert('Data Berhasil Dihapus');</script>";
        header("location:adminSiswa.php");
    } else {
        echo "<script>alert('Gagal menghapus data.');</script>";
        header("location:adminSiswa.php");
    }
?>