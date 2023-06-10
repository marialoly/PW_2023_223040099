<?php require('partials/header.php'); ?>
<?php require('partials/navbar.admin.php'); ?>

<div class="container mt-3">
    <h1>Tambah Kuliner</h1>

    <div class="row">
        <div class="col-md-8">
            <form action="" method="post">
                <div class="mb-3 w-25">
                    <label for="menu" class="form-label">Menu</label>
                    <input type="text" class="form-control" name="menu" id="menu" autofocus required>
                </div>
                <div class="mb-3">
                    <label for="deskripsi_menu" class="form-label">Deskripsi Menu</label>
                    <input type="text" class="form-control" name="deskripsi" id="deskripsi">
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="text" class="form-control" name="gambar" id="gambar">
                </div>
                <button class="btn btn-primary" type="submit" name="tambah">Tambah Data</button>
            </form>
        </div>
    </div>

</div>

<?php require('partials/footer.php'); ?>