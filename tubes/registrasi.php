<?php 

require('config/koneksi.php');
require('views/registrasi.view.php');


if(isset($_POST['submit'])) {
  
  $id_user      = $_POST['id_user'];
  $nama         = $_POST['nama'];
  $username     = $_POST['username'];
  $email        = $_POST['email'];
  $password     = $_POST['password'];
  
  $sql = "INSERT INTO user(id_user, nama, username, email, password, level) VALUE('{$id_user}','{$nama}', '{$username}', '{$email}', '{$password}', 'user')";
  $query = mysqli_query($koneksi, $sql);

  echo "<script>alert('Register Berhasil!');</script>";
  echo "<meta http-equiv='refresh' content='0; url=login.php'>";

}

 
?>