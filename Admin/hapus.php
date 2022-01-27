<?php
if (isset($_GET['id'])) {
    require 'koneksi.php';

    $id = $_GET['id'];
    $query = "DELETE FROM tbl_atlet WHERE id_atlet='$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header('location:home.php');

        // echo 'Berhasil Di hapus';
    } else {
        echo 'Data Gagal Terhapus' . mysqli_error($koneksi);
    }
}
