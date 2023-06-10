<?php
require 'functions.php';

$name = 'Tambah Kuliner';

// ketika tombol submit diklik 

if (isset($_POST['tambah'])) {

    // ambil data dari form lalu tambah ke tabel mahasiswa
    // cek apakah tambah data berhasil

    if (tambah($_POST) > 0) {
        echo "<script>
    alert('Berhasil menambahkan data!');
    document.location.href = 'produk.php';
    </script>";
    }
}

require 'views/tambah.view.php';
?>
