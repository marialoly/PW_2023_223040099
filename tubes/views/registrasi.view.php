<?php  
require('partials/header.php');
?>

<div class="container">
    <h2>Registrasi</h2>
    <form action="registrasi.php" method="post">
        <label>Nama</label>
        <input name="nama" type="text" required><br>
        <label>Username</label><br>
        <input name="username" type="text" required><br>
        <label>Email</label>
        <input name="email" type="text" required><br>
        <label>Password</label><br>
        <input name="password" type="password" required><br>
        <input name="submit" type="submit" value="Daftar">
        <a href="login.php">Sudah memiliki akun? Masuk.</a>
    </form>
</div>
</body>
</html>
<style>
    body{
        font-family: Arial, sans-serif;
        background-color:  #F5F5DC;
        margin: 0;
        padding: 0;
    }
    .container{
        max-width: 400px;
        margin: 50px auto;
        background-color: #fff;
        padding: 30px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .container h2 {
        text-align: center;
        margin-top: 10px;
        color: firebrick ;   
    }
    .container form label{
        width: 100%;
        padding: 10px;
    
    }
    .container form input {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
        Color: firebrick;
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
    .container a {
    font-size: 15px;
    margin-bottom: 100px;
    color: firebrick;
    float: right;
}
</style>