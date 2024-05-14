<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman html Nailah</title>
    <style>
        .error {
            color: red;
            font-size: 0.8em;
        }
    </style>
</head>
<body>
<h1>Halaman Login</h1>
<?php
$name = $email = "";
$nameErr = $emailErr = "";


function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if (empty($_POST["username"])) {
        $nameErr = "Masukan username";
    } else {
        $name = bersihkan_input($_POST["username"]);
    }
  
    if (empty($_POST["password"])) {
        $emailErr = "Masukan password";
    } else {
        $email = bersihkan_input($_POST["password"]);
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Username: <input type="text" name="username">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    Password: <input type="password" name="password">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    <input type="submit" value="Login">
</form>

</body>
</html>
