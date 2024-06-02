<?php
session_start();
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_POST['guest'])) {
        header("Location: home.php?guest=true");
        exit;
    } else {
        $query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
        $result = $koneksi->query($query);

        if ($result->num_rows > 0) {
            $_SESSION['loggedin'] = true;
            header("Location: home.php?message=welcome");
            exit;
        } else {
            // Ganti dengan badge alert dari Bootstrap
            $_SESSION['login_error'] = "Akun Tidak Terdaftar!";
            $_SESSION['login_error_type'] = "danger"; // Tambahkan tipe pesan
            header("Location: index.php"); 
            exit;
        }
    }
}

$koneksi->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Online Adryan Maha Putra</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <div class="container" id="target">
        <div class="login-container">
            <img src="img/ico.png">
            <h1 class="judul">Ryan CV</h1>
            <!-- Form login -->
            <form action="" method="post">
                <!-- Input username dan password -->
                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <!-- Tombol login -->
                <input type="submit" class="btn btn-outline-primary" value="Login">
            </form>

            <!-- Tampilkan badge alert jika ada pesan kesalahan -->
            <?php if (isset($_SESSION['login_error'])): ?>
                <div class="alert alert-<?php echo $_SESSION['login_error_type']; ?>" role="alert">
                    <?php echo $_SESSION['login_error']; ?>
                </div>
                <?php unset($_SESSION['login_error']); ?>
                <?php unset($_SESSION['login_error_type']); ?>
            <?php endif; ?>

            <!-- Form login tamu -->
            <form action="home.php" method="post">
                <input type="hidden" name="guest" value="true">
                <input type="submit" class="btn btn-outline-primary" value="Masuk sebagai tamu">
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".container").addClass("animate__animated animate__backInDown");
        });
    </script>
</body>

</html>
