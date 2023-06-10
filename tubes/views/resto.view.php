<?php 
require('partials/header.php');
require('partials/navbar.php');
require('functions.php');
$resto = query("SELECT * FROM resto ");
?>

<div class="resto-section">
    <div class="container">
            <div class="col-md-6">
                <div class="resto-content">
                <h3>Berbagai Restaurant Italia di Indonesia</h3>
                </div>
            </div>
        
    </div>
    <section class="row" style="padding: 50px;" id="menu">
        <?php foreach ($resto as $item) { ?>
      <div class="col-md-4 py-15 py-md-15" style="margin-bottom: 15px;" >
        <div class="card" style="width: 20rem; height:100%; background-color: #F5F5DC;">
    
          <div class="card-title" style="margin: 1px;">
          <img src=img/<?= $item['gambar']; ?> alt="Poster" style="margin: 5px; width: 95%; position: center;">
            <h3 class=card-title><?= $item['nama_resto']; ?></h3>
          </div>
          <div class="card-text" style="margin:5px;">
            <p><?= $item['deskripsi_resto']; ?></p>
          </div>
          <div class="card-text" style="margin:5px;">
            <p>Alamat : <?= $item['alamat']; ?></p>
          </div>
          <div class="card-text" style="margin:5px;">
            <p>No. Telp : <?= $item['telpon']; ?></p>
          </div>
          <div class="card-text" style="margin:5px;">
            <p>Rating : <?= $item['rating']; ?></p>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>

<style>
    .resto-section {
    background-color: 	#F5F5F5;
    padding: 20px 0;
}
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}
.resto-content h3 {
    font-family: Century;
    text-align: center;
    color: firebrick;
    font-size: 25px;
    margin-bottom: 20px;
}
.resto-content p {
    font-size: 17px;
    line-height: 0,5px;
    padding: 5px;
}
  </style>
  <?php 
require('partials/footer.php');
?>
