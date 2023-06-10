<?php
require('partials/header.php');
require('partials/navbar.php');
?>

<div class="kuliner-section">
<div class="main-txt">
    <h3>Italian Food</h3>
</div>

    <section class="row" style="padding: 50px;" id="menu">
        <?php foreach ($menu as $item) { ?>
      <div class="col-md-4 py-15 py-md-15" style="margin-bottom: 15px;" >
        <div class="card" style="width: 20rem; height:100%; background-color: #F5F5DC;">
          <img src=img/<?= $item['gambar']; ?> alt="Poster" style="margin: 5px; width: 95%; position: center;">
          <div class="card-title" style="margin: 1px;">
            <h3 class=card-title><?= $item['menu']; ?></h3>
          </div>
          <div class="card-text" style="margin:5px;">
            <p><?= $item['deskripsi_menu']; ?></p>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>
    </div>
  </section>
<style>
  .kuliner-section {
    background-color: 	#F5F5F5;
    padding: 10px 0;
}
    h3{
        font-family: century;
        color: firebrick;
        text-align: center;
        margin-bottom: 10px;
        margin-top: 10px;
    }
    .menu-item {
        font-family:Arial, Helvetica, sans-serif;
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
        align-items: center;
        margin-bottom: 20px;
    }
    img {
        flex-wrap: wrap;
        width: 100px;
        height: auto;
        margin-bottom: 10px;
        margin-right: 60px;
        position: center;
    }
    h2, p {
        text-align:center;
        font-family:Arial, Helvetica, sans-serif;        
        
    }
</style>
<?php 
require('partials/footer.php');
?>