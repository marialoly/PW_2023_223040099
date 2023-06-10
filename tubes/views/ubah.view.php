<?php require('partials/header.php'); ?>
<?php require('partials/navbar.php'); ?>

<div class="container mt-3">

    <div class="row">
        <div class="col-md-8">
            <form action="" method="post">  
                <input type="hidden" name="id" value="<?= $user['id_menu']; ?>">
                <div class="mb-3">
                    <label for="menu" class="form-label">Gambar</label>
                    <input type="text" class="form-control" name="gambar" id="gambar" maxlength="9" autofocus required value="<?= $user['gambar']; ?>">
                </div>
                <div class="mb-3">
                    <label for="menu" class="form-label">Menu</label>
                    <input type="text" class="form-control" name="menu" id="menu" value="<?= $user['menu']; ?>">
                </div>
                <div class="mb-3">
                    <label for="deskripsi_menu" class="form-label">Deskripsi Menu</label>
                    <input type="text" class="form-control" name="deskripsi_menu" id="deskripsi_menu" value="<?= $user['deskripsi_menu']; ?>">
                </div>
                <button class="btn btn-primary" type="submit" name="ubah">Ubah Data</button>
            </form>
        </div>
    </div>

</div>

<?php require('partials/footer.php'); ?>