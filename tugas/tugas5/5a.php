<?php 
$student = [
    [
        'nama' => 'Maria Oa Paulina Memen Loly',
        'nrp' => '223040099',
        'prodi' => 'Teknik Informatika',
        'email' => 'marialoly@gmail.com',
        'img' => 'maria.jpg'
    ],
    [
        'nama' => 'Nita Febriany',
        'nrp' => '223040096',
        'prodi' => 'Teknik Informatika',
        'email' => 'nitafeby@gmail.com',
        'img' => 'nitafeb.jpg'
    ],
    [
        'nama' => 'Varrel Varrandi',
        'nrp' => '221000193',
        'prodi' => 'Ilmu Hukum',
        'email' => 'varrandirel@gamail.com',
        'img' => 'varel.jpg'
    ],
    [
        'nama' => 'Andiana Eka Riyanto',
        'nrp' => '223040115',
        'prodi' => 'Teknik Informatika',
        'email' => 'andien@gmail.com',
        'img' => 'andien.jpg'
    ],
    [
        'nama' => 'Melinda Sulaeman',
        'nrp' => '223040091',
        'prodi' => 'Teknik Informatika',
        'email' => 'melindaa@gmail.com',
        'img' => 'melinda.jpg'
    ],
    [
        'nama' => 'Rafi Nur Fauzan',
        'nrp' => '224010253',
        'prodi' => 'Manajemen',
        'email' => 'rafifauza@gmail.com',
        'img' => 'rafi.jpg'
    ],
    [
        'nama' => 'Wulan Nenda Azzahra',
        'nrp' => '223010087',
        'prodi' => 'Teknik Industri',
        'email' => 'wulannenda@gmail.com',
        'img' => 'wulan.jpg'
    ],
    [
        'nama' => 'Nova asyifa',
        'nrp' => '223040112',
        'prodi' => 'Teknik Informatika',
        'email' => 'novasyifa@gmail.com',
        'img' => 'nova.jpg'
    ],
    [
        'nama' => 'Rifki Nugraha Saputra',
        'nrp' => '222050469',
        'prodi' => 'Ilmu Komunikasi',
        'email' => 'rifkisaputra@gmail.com',
        'img' => 'rifki.jpg'
    ],
    [
        'nama' => 'Feby Alia Rahman',
        'nrp' => '223040059',
        'prodi' => 'Teknik Informatika',
        'email' =>  'febyalia@gmail.com',
        'img' => 'feby.jpg'
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5</title>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
    <?php foreach ($student as $s) : ?>
     <ul>
     <li> <img src="img/<?=$s["img"]; ?>" alt="pict" width=100></li>
        <li>Nama : <?= $s ['nama'] ?> </li>
        <li>NRP : <?= $s ['nrp'] ?> </li>
        <li>Jurusan : <?= $s ['prodi'] ?> </li>
        <li>E-mail : <?= $s ['email'] ?> </li>
     </ul>
    <?php endforeach ?>
</body>
</html>