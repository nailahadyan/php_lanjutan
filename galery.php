<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pink Gallery</title>
    <style>
        .galeri {
            display: flex;
            flex-wrap: wrap;
            gap: 20px; /* Mengatur jarak antar gambar */
        }
        .galeri img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>

<h1>Pink Gallery🧁🫧🩷🩰🌷🐰</h1> <!-- Judul galeri -->
<div class="galeri">
    <?php
    // Menampilkan galeri gambar dari folder 'gambar'
    $fileList = glob('gambar/*'); // Membaca semua file dalam folder 'gambar'
    foreach ($fileList as $filename) { // Melakukan iterasi pada setiap file
        if (is_file($filename)) { // Memeriksa apakah itu file dan bukan folder
            // Menampilkan gambar
            echo '<img src="'.$filename.'" alt="Image">';
        }
    }
    ?>
</div>

</body>
</html>
