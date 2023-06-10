<?php 
define('BASE_URL','/pw_2023_223040099/tubes/');

function koneksi()
{
  $conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'tubes_pw23'
    ) or die('KONEKSI KE DATABASE GAGAL!');
  return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
//Function untuk HAPUS DATA / DELETE
function hapus($id)
{
  $conn = koneksi();
  $query = "DELETE FROM menu WHERE id = $id ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

// Function untuk TAMBAH DATA / INSERT
function tambah($data) {
  $conn = koneksi();
  $menu = $data["menu"];
  $deskripsi = $data["deskripsi"];
  $foto = $data["gambar"];
  

  $query = "INSERT INTO `menu` 
                        (`menu`, `deskripsi_menu`, `gambar`) 
                        VALUES 
                       ('$menu', '$deskripsi', '$foto');";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

// Function untuk UBAH DATA / UPDATE
function update($data) {
  $conn = koneksi();
  $id = $data["id"];
  $foto = $data["gambar"];
  $men = $data["menu"];
  $deskripsi = $data["deskripsi_menu"];

  $update = "UPDATE `menu` 
           SET 
           `menu` = '$men',
           `deskripsi_menu` = '$deskripsi',
           `gambar` = '$foto'
           WHERE `menu`.`id_menu` = $id";

  mysqli_query($conn, $update);

  return mysqli_affected_rows($conn);

}


function dd($value)
{
 echo "<prev>";
 var_dump($value);
 echo "</prev>";
 die();
}

function uriIs($uri)
{
    return ($_SERVER['REQUEST_URI'] === BASE_URL . $uri) ? 'active' : '';
}


?>