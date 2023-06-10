<?php 

//array associative
//array yang index nya adalah string, 

    $mahasiswa = [
    [
        'nama' => 'Maria', 
        'binatang' => '🐶', 
        'makanan' => ['🍗', '🍕']
    ],
    [
        'nama' => 'Nenda',
        'binatang' => '🐴', 
        'makanan' => ['🍔', '🍟']
    ], 
    [
        'nama' => 'Melinda', 
        'binatang' => '🦋', 
        'makanan' => ['🍜']
    ], 
    [
        'nama' => 'Nita', 
        'binatang' => '🐵', 
        'makanan' => ['🍣']
    ], 
    [
        'nama' => 'Loly', 
        'binatang' => '🐰', 
        'makanan' => ['🧆', '🍩', '🍰']
    ]
    ];
?>
<!-- Array multi dimensi / array di dalam array -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    
<h2>Daftar Mahasiswa</h2>
<?php foreach ($mahasiswa  as $m) { ?>

<ul>
    <li>Nama : <?= $m ['nama']; ?> </li>
    <li>Makanan favorit : 
        <?php foreach($m['makanan'] as $makanan ) {
            echo $makanan;
        } ?>
    <li>Hewan Peliharaan : <?= $m ['binatang']; ?></li>
</ul>
<?php } ?>

</body>
</html>