<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF_8">
        <title>Halaman html Nailah</title>
    </head>
    <body>
    <h1> Nama dan Usia</h1>
<?php
$people = [
    ["nama" => "Nora", "umur" => 22],
    ["nama" => "Jaden", "umur" => 25],
    ["nama" => "Citra", "umur" => 28],
    ["nama" => "Ajeng", "umur" => 21],
    ["nama" => "Bagas", "umur" => 30],
    ["nama" => "Fajar", "umur" => 24],
    ["nama" => "Gina", "umur" => 27],
    ["nama" => "Nayya", "umur" => 26],
    ["nama" => "Ara", "umur" => 23],
    ["nama" => "Netha", "umur" => 29],
    ["nama" => "Kiki", "umur" => 20],
    ["nama" => "Sangkara", "umur" => 32],
    ["nama" => "Dwendra", "umur" => 31],
    ["nama" => "Nico", "umur" => 33],
    ["nama" => "Oki", "umur" => 34],
    ["nama" => "Fais", "umur" => 20],

];

// konversi array ke JSON
$jsonData = json_encode($people,JSON_PRETTY_PRINT);

// menampilkan json
echo "<pre>" . $jsonData . "</pre>";
?>
