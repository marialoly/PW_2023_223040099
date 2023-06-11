<?php 
require('admin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
</head>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1;
      foreach ($menus as $menu) : ?>
        <tr>
          <th scope="row"><?= $i++; ?></th>
          <td style="width: 20%;" cellpadding="0">
            <img src="img/<?= $menu["gambar"]; ?>" style="width:80%">
        </td>
          <td><?= $menu["menu"]; ?>
        </td>
          <td><?= $menu["deskripsi_menu"]; ?>
        </td>
          <td>
            <a href="ubah.php?id_menu=<?= $menu['id_menu']; ?>" onclick="return confirm ('Ubah data?')">Ubah</a> |
            <a href="hapus.php?id_menu=<?= $menu['id_menu']; ?>" onclick="return confirm ('yakin ingin menghapus?')">Hapus</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
  </table>
  <ul style="color:white;">
  <li style="float:right; margin:5px 10px;">
    <button type="button" class="btn btn-secondary">
    <a href="tambah.php" style= "margin:20px; padding:20px; color: black;">Tambah</a>
    </button>
    </li>
      </ul>