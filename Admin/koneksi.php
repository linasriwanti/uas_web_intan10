<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'db_atlet');
if (!$koneksi) {
    die('Koneksi Gagal' . mysqli_connect_errno());
}
