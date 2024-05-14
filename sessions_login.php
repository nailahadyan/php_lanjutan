<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sessions</title>
</head>
<body>
    <?php
    session_start();

    // Menambahkan penanganan kesalahan dengan exception
    try {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Validasi input
            if ($username === '' || $password === '') {
                throw new Exception("Username atau password tidak boleh kosong.");
            }

            // Proses validasi username dan password (seharusnya dengan database)
            if ($username === 'user' && $password === 'pass') {
                $_SESSION['username'] = $username;
                header("Location: galery.php");
                exit();
            } else {
                throw new Exception("Username atau password salah.");
            }
        }

        // Cek jika user sudah login
        if (isset($_SESSION['username'])) {
            // User sudah login, redirect ke halaman galeri
            header("Location: galery.php");
            exit();
        }
    } catch (Exception $e) {
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
    ?>

    <h1>Login Menggunakan Sessions</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
