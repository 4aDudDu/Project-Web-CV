<?php
session_start();
require 'koneksi.php';

// Jika pengguna belum login atau login sebagai tamu, alihkan kembali ke index.php
if (!isset ($_SESSION['loggedin']) && !isset ($_SESSION['guest'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="bot/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Profil</title>
</head>

<body>



    <!-- untuk menu -->
    <div class="menu">
        <a href="home.php"><button type="button" class="btn btn-outline-light animate__animated animate__backInDown"
                id="btnmenu">Profile</button></a>
        <a href="pndk.php"><button type="button" class="btn btn-outline-light animate__animated animate__backInDown"
                id="btnmenu">Riwayat
                Pendidikan</button></a>
        <a href="orga.php"><button type="button" class="btn btn-outline-light animate__animated animate__backInDown"
                id="btnmenu">Organisasi</button></a>
        <a href="prestasi.php"><button type="button" class="btn btn-outline-light animate__animated animate__backInDown"
                id="btnmenu">Prestasi</button></a>
        <a href="doku.php"><button type="button" class="btn btn-outline-light animate__animated animate__backInDown"
                id="btnmenu">Dokumentasi</button></a>
    </div>

    <!-- untuk tombol log out -->
    <span class="btnback">
        <a href="index.php"><button type="button" class="btn btn-outline-light animate__animated animate__bounceInLeft"
                id="btnmenu"><img src="img/bck.png" width="30" height="30"></button></a>
    </span>

    <!-- isi konten -->

        <div class="card container animate__animated animate__fadeIn" style="width: 18rem;">
            <img src="attr/profil/foto.jpg" class="card-img-top">
            <div class="card-body-transparent">
                <h5 class="card-title">Profil</h5>
                <p class="card-text">Nama : Adryan Maha Putra <br> 
                Lahir : Pekanbaru, 2 September 2002<br>
                Motto : "Belajarlah hingga tangan dan kaki tidak Berfungsi Kembali" <br>
                Pend.Terakhir : S1 Teknik Informatika (Berlangsung)
            </p>
            </div>
        </div>















    <script src="bot/js/bootstrap.min.js"></script>
    <script src="bot/js/bootstrap.bundle.js"></script>
</body>

</html>