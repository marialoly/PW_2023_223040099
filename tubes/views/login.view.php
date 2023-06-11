<?php 
require('partials/header.php');
require('partials/navbar.php');
?>
<div class="login-form">
    <div class="login">
        <h2>Login</h2>
        <form action="login.php" method="post">
        <div class="inputbox">
            <input  name="username" type="text" placeholder="Username" name="username" required>
        </div>
        <div class="inputbox">
            <input name="password" type="password" placeholder="Password" name="password" required>
        </div>
        <div class="button-content">
            <input name="submit" type="submit" value="Login" id="btn" required>
        </div>

        <div class="button-content">
            <a href="registrasi.php">Don't have account? Sign up.</a>
        </div>

        </form>

    </div> 
</div>
<style>
.login-form{
    width: 100%;
    height: 89vh;
    background-image: url(img/bgg.jpg);
    padding-top: 50px;
    padding-bottom: 50px;
    background-size: cover;
    opacity: 0.7;
}
.login {
    max-width: 400px;
    margin: 0 auto;
    padding-top: 20px;
    backdrop-filter: blur(6px);
    padding-bottom: 30px;
    border: 1px solid #ddd;x
}
.login h2{
    text-align: center;
    margin-top: 10px;
    color: firebrick ;   
}
.login form input{
    width: 100%;
    padding: 10px;
    Color: firebrick;
}
.login a {
    font-size: 15px;
    margin-bottom: 100px;
    color: firebrick;
    float: right;
}
</style>