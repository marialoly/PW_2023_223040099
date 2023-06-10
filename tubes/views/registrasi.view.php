<?php  
require('partials/header.php');
?>
<div class="container">
    <h2>Registrasi</h2>
    <form action="registrasi.php" method="post">
        <label>Nama</label>
        <input name="nama" type="text"><br>
        <label>Username</label><br>
        <input name="username" type="text"><br>
        <label>Email</label>
        <input name="email" type="text"><br>
        <label>Password</label><br>
        <input name="password" type="password"><br>
        <input name="submit" type="submit" value="Daftar">
    </form>
</div>
</body>
</html>
<style>
    body{
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container{
        max-width: 400px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .container h2 {
        text-align: center;
        margin-bottom: 20px;
}
.container form label{
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
}
.container form input {
    width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 3px;
}
.container form button{
    width: 100%;
      padding: 10px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
}
</style>