<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    body {
        background: blue;
    }
    </style>
</head>

<body>
    <?php
    // Proses login
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Biasanya, validasi dan autentikasi akan dilakukan di sini
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Contoh autentikasi sederhana
        $validUsername = 'putra';
        $validPassword = 'putratampan';

        if ($username === $validUsername && $password === $validPassword) {
            // `&&` digunakan untuk menggabungkan dua kondisi 

            echo "Login berhasil!";
            // Di sini biasanya akan ada redirect ke halaman setelah login
            exit;
        } else {
            echo "Login gagal. Coba lagi.";
        }
    }
    // Tampilkan form login
    include 'login_form.php';
    ?>
</body>

</html>