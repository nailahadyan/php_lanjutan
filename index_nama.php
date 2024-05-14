<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF_8">
        <title>Halaman html Nailah</title>
    </head>
    <body>
    <h1>Index Nama dan Usia</h1>
<?php
$people = [
    ["nama" => "Ayu", "umur" => 22],
    ["nama" => "Budi", "umur" => 25],
    ["nama" => "Citra", "umur" => 28],
    ["nama" => "Dedi", "umur" => 21],
    ["nama" => "Eka", "umur" => 30],
    ["nama" => "Fajar", "umur" => 24],
    ["nama" => "Gina", "umur" => 27],
    ["nama" => "Hari", "umur" => 26],
    ["nama" => "Indah", "umur" => 23],
    ["nama" => "Joko", "umur" => 29],
    ["nama" => "Kiki", "umur" => 20],
    ["nama" => "Lina", "umur" => 32],
    ["nama" => "Mira", "umur" => 31],
    ["nama" => "Nico", "umur" => 33],
    ["nama" => "Oka", "umur" => 34],
    ["nama" => "Fais", "umur" => 20],

];

// Konversi array ke JSON
$jsonData = json_encode($people,JSON_PRETTY_PRINT);

// Tampilkan JSON
echo "<pre>" . $jsonData . "</pre>";
?>
