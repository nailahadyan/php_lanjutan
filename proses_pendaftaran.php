<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nim = isset($_GET['nim']) ? $_GET['nim'] : '';
    $nama = isset($_GET['nama']) ? $_GET['nama'] : '';
    $email = isset($_GET['email']) ? $_GET['email'] : '';
    $tempat_lahir = isset($_GET['tempat_lahir']) ? $_GET['tempat_lahir'] : '';
    $tanggal_lahir = isset($_GET['tanggal_lahir']) ? $_GET['tanggal_lahir'] : '';
    $alamat = isset($_GET['alamat']) ? $_GET['alamat'] : '';
    $jenis_kelamin = isset($_GET['jenis_kelamin']) ? $_GET['jenis_kelamin'] : '';
    
    echo "Selamat datang <b>" . $nama . "</b><br>";
    echo "NIM: " . $nim . "<br>";
    echo "Nama Lengkap: " . $nama . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Tempat Lahir: " . $tempat_lahir . "<br>";
    echo "Tanggal Lahir: " . $tanggal_lahir . "<br>";
    echo "Alamat: " . $alamat . "<br>";
    echo "Jenis Kelamin: " . $jenis_kelamin . "<br>";
}
?>
