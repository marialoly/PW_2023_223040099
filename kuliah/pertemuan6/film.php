<?php 
$film = [
    [
        'img' => '13 Hours.png',
        'judul' => '13 Hours',
        'tahun' =>  '2016',
        'genre' => ['Action', 'Drama', 'History'],
        'pemeran utama' => ['John Krasinki', 'Pablo Schreiber', 'James Badge Dale'],
        'sutradara' => 'Michael Bay'
    ],

    [
        'img' => 'Outer Banks.png',
        'judul' => 'Outer Banks',
        'tahun' =>  '2020',
        'genre' => ['Action, ', 'Crime', 'Drama'],
        'pemeran utama' => ['Chase Stokes', 'Madelyn Cline', 'Madison Bailey'],
        'sutradara' => 'Valerie Weiss'
    ],

    [
        'img' => '12 Strong.png',
        'judul' => '12 Strong',
        'tahun' =>  '2018',
        'genre' => ['Action', 'Drama', 'History'],
        'pemeran utama' => ['Chris Hemsworth','Michael Shannon', 'Michael Pena'],
        'sutradara' => 'Nicolai Fuglsig'
    ], 

    [
        'img' => 'The Age of Adaline.png',
        'judul' => 'The Age of Adalinee',
        'tahun' =>  '2015',
        'genre' =>  ['Drama', 'Fantasy', 'Romance'],
        'pemeran utama' => ['Blake Lively', 'Michael Huisman', 'Harrison Ford'],
        'sutradara' => 'Lee Toland Kriegar'
        
    ], 

    [
        'img' => 'The Shallows.png',
        'judul' => 'The Shallows',
        'tahun' =>  '2016',
        'genre' =>  ['Action', 'Drama', 'Horror'],
        'pemeran utama' => ['Blake Lively', 'Oscar Jaenada', 'Angelo Josue Lozano Corzo'],
        'sutradara' => 'Brian Andrew'
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Latihan3 Film</title>
</head>
<body>
    <h2>Daftar Film Favorit</h2>
    <?php foreach ($film as $f) : ?>
     <ul>
        <li> <img src="img/<?=$f["img"]; ?>" alt="poster" width=100></li>
        <p>Film ini diproduksi pada tahun sekitar 2002</p>
        <li>Judul : <?= $f ['judul'] ?> </li>
        <li>Tahun : <?= $f ['tahun'] ?> </li>
        <li>Genre : 
            <?php 
            foreach ($f['genre'] as $genre) {
                echo $genre;
            }
            ?> 
            </li>
        <li>Pemeran Utama : 
            <?php 
            foreach ($f['pemeran utama'] as $karakter){
                echo $karakter;
            } 
            ?> 
            </li>
        <li>Sutradara : <?= $f ['sutradara'] ?> </li>
     </ul>
     <?php endforeach ?>
</body>
</html>
