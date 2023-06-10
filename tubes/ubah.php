<?php
require ('functions.php');

// $nama = 'Ubah Produk';
$id = htmlspecialchars($_GET['id_menu']);
$user = query("SELECT * FROM menu WHERE id_menu =$id")[0];  



if (isset($_POST['ubah'])) {
// var_dump($_POST['ubah']); die();
    if (update($_POST) > 0) {
        echo "<script>
    alert('ubah data berhasil!');
    document.location.href = 'produk.php';
    </script>";
    }
}

require 'views/ubah.view.php'
?>