<?php
$HOST = 'localhost';
$USER = 'root';
$PASSWORD = '';
$DATABASE = 'tubes_pw23';

$koneksi = mysqli_connect($HOST, $USER, $PASSWORD, $DATABASE);
if (!$koneksi){
    die("Gagal terhubung database;" . mysqli_connect_error());
}

?>