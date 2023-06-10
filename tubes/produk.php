<?php 

require('functions.php');

$menus = query("SELECT * FROM menu");
require('partials/header.php');
require('views/produk.view.php');
?>