<?php 
    include "koneksi.php";
    $id = $_GET['id'];

    $sql = "DELETE FROM kelas WHERE id='$id'";
    $hasil = mysqli_query($koneksi, $sql);

    if ($hasil) {
        echo "<script>alert('Kelas Berhasil Dihapus');</script>";
        header("location:adminKelas.php");
    } else {
        echo "<script>alert('Gagal menghapus kelas.');</script>";
        header("location:adminKelas.php");
    }
?>