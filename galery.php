<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pink Gallery</title>
    <style>
        .galeri {
            display: flex;
            flex-wrap: wrap;
            gap: 20px; 
        }
        .galeri img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>

<h1>Pink Gallery🧁🫧🩷🩰🌷🐰</h1> 
<div class="galeri">
    <?php
    $fileList = glob('gambar/*'); 
    foreach ($fileList as $filename) { 
        if (is_file($filename)) { 
           
            echo '<img src="'.$filename.'" alt="Image">';
        }
    }
    ?>
</div>

</body>
</html>
