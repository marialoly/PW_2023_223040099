<?php require('functions.php') ?>
<?php $title='Kuliner';  ?>
<?php
$menu = query("SELECT * FROM menu ");
 ?>

<?php require('views/kuliner.view.php'); ?>