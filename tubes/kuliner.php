<?php require('functions.php') ?>
<?php $title='Menu';  ?>
<?php
$menu = query("SELECT * FROM menu ");
 ?>

<?php require('views/kuliner.view.php'); ?>