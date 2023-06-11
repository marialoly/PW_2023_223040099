<?php
$HOST = 'localhost';
$USER = 'root';
$PASSWORD = '';
$DATABASE = 'tubes_pw23';

$koneksi = mysqli_connect($HOST, $USER, $PASSWORD, $DATABASE);

// require('../config/session.php');
// require('../config/koneksi.php');

$id = $_GET['id_menu'];

try {
    $sql = "DELETE FROM menu WHERE id_menu = '{$id}';";
    $query = mysqli_query($koneksi, $sql);

    if($query) {
        echo "<script>alert('Data Gagal Dihapus!');</script>";
    } else {
        echo "<script>alert('Data berhasil Dihapus!');</script>";
    }
} catch (\Exception $th) {
    echo "<script>alert('ID Data tidak Ditemukan!');</script>";
}


header('Location: produk.php');
