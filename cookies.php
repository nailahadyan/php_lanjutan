<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = filter_input(INPUT_POST, "nama", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    setcookie("nama", $nama, time() + 60, "/");
    setcookie("email", $email, time() + 60, "/");

    echo "Data identitas Anda telah disimpan dalam cookies.";
}

if(isset($_COOKIE['nama']) && isset($_COOKIE['email'])) {

    echo "<br>Nama: " . $_COOKIE['nama'] . "<br>Email: " . $_COOKIE['email'];
} else {
   
    echo "<br>Data identitas tidak ditemukan dalam cookies.";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    Nama: <input type="text" name="nama"><br>
    Email: <input type="email" name="email"><br>
    <input type="submit" value="simpan">
</form>
