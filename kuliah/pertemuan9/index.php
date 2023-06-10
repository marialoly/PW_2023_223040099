<?php
require('functions.php');
    $title = 'Home';
    $students = [
    [
         "nama" => "Maria Loly",
         "npm" => "223040099",
         "email" => "paulinamaria035@gmail.com"
    ],
    [
         "nama" => "Nita Febriany",
         "npm" => "223040096",
         "email" => "nitafeby@gmail.com"
        
        ],
    ];

    // dd($_SERVER["REQUEST_URI"]);
// "/pw2023_223040076/kuliah/pertemuan9/index.php"


require('views/index.view.php');
?> 
