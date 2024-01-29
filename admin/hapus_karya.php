<?php 
    include "koneksi.php";
    $id = $_GET['id_upload'];

    $sql = "DELETE FROM upload_karya WHERE id_upload='$id'";
    $hasil = mysqli_query($koneksi, $sql);

    if ($hasil) {
        echo "<script>alert('Data Berhasil Dihapus');</script>";
        header("location:adminKarya.php");
    } else {
        echo "<script>alert('Gagal menghapus data.');</script>";
        header("location:adminKarya.php");
    }
?>