<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF_8">
        <title>Halaman html Nailah</title>
    </head>
    <body>
    <h1>Formulir Komentar</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
         Nama: <input type="text" name="nama"><br>
        Email: <input type="email" name="email"><br>
        Komentar: <textarea name="komentar" rows="5" cols="40"></textarea><br>
        <input type="submit" value="simpan">
        <input type="reset" value="bersihkan">
        </form>
        <?php
    $name = $email = $comment = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["nama"];
    $email = $_POST["email"];
    $comment = $_POST["komentar"];
    echo("Nama :" .$name."<br>");
    echo("Email :" .$email."<br>");
    echo("Komentar :" .$comment."<br>");
    echo("<hr>");
}
function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

    </body>
</html>