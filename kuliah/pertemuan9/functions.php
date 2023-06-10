<?php 
define('BASE_URL','/pw_2023_223040099/kuliah/pertemuan9/');

function dd($value)
{
 echo "<prev>";
 var_dump($value);
 echo "</prev>";
 die();
}

function uriIs($uri)
{
    return ($_SERVER['REQUEST_URI'] === BASE_URL . $uri) ? 'active' : '';
}

?>