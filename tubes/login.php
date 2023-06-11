<?php
require('config/koneksi.php');
require('views/login.view.php');

session_start();

if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM `user` WHERE `username` = '{$username}' AND `password` = '{$password}'";
  $query = mysqli_query($koneksi, $sql);

  if($query->num_rows > 0) {
      $user = mysqli_fetch_array($query);
      $_SESSION['id_user']  = $user['id_user'];
      $_SESSION['username']  = $user['username'];
      $_SESSION['email'] = $user['email'];
      $_SESSION['level']    = $user['level'];
      echo "<script>alert('Login Berhasil!');</script>";

      if($user['level'] == 'admin'){
          echo "<meta http-equiv='refresh' content='0; url=produk.php'>";
      } else {
          echo "<meta http-equiv='refresh' content='0; url=user.php'>";
      }
  } else {
      echo "<script type='text/javascript'>alert('username dan password salah!');</script>";
  }
}

?>