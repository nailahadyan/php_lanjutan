<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exception</title>
</head>
<body>
    <?php
    session_start(); // Memulai sesi

    function loginUser($username, $password) {
        // Mengecek apakah username atau password kosong
        if ($username === '' || $password === '') {
            throw new InvalidArgumentException("Username dan password harus diisi.");
        }
        // Mengecek apakah password yang dimasukkan salah
        if ($password !== '123') {
            throw new RuntimeException("Password yang dimasukkan salah.");
        }
        // Jika login sukses, set username ke dalam sesi
        $_SESSION['username'] = $username;
    }

    // Periksa login status ketika form login disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            $username = $_POST['username'];
            $password = $_POST['password'];
            loginUser($username, $password); // Memanggil fungsi loginUser
            header("Location: galery.php"); // Mengarahkan ke halaman galeri
            exit();
        } catch (InvalidArgumentException $e) {
            $error_message = $e->getMessage(); // Menangkap dan menyimpan pesan error
        } catch (RuntimeException $e) {
            $error_message = $e->getMessage(); // Menangkap dan menyimpan pesan error
        }
    }
    ?>

    <h1>Login Menggunakan Exception</h1>
    <?php if (isset($error_message)) { ?>
        <p>Error: <?php echo $error_message; ?></p> <!-- Menampilkan pesan error jika ada -->
    <?php } ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
