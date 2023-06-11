<?php 

require('functions.php');
$title='Kuliner';

$menus = query("SELECT * FROM menu");
require('partials/header.php');
require('views/produk.view.php');
?>