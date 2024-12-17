<?php
/*
    Kelas SI-48-10
    Kelompok 03
    Anggota Kelompok:
    1. Geoffrey Putra (102022400215)
    2. Cedric Satria Wibawa (102022400189)
    3. Faris Yahya Ayyash Alfatih (102022400029)
    4. Ridho Muhammad Zahran (102022400293)
    5. Rizky Firman Nanda (102022400203)
    */
require 'koneksi.php';

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query untuk mendapatkan data user berdasarkan username
    $hasil = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username'");
    $row = mysqli_fetch_assoc($hasil);

    // Periksa apakah user ditemukan
    if ($row) {
        // Verifikasi password
        if ($password == $row["password"]) { // Ganti ini dengan password_verify jika password di-hash
            session_start();
            $_SESSION["login"] = true;
            $_SESSION["username"] = $row["username"];

            if ($row["tipe"] == "admin") {
                header("Location: ../admin.php");
            } else {
                header("Location: ../dashboard.php");
            }
        } else {
            echo "<script>alert('Wrong password'); window.location.href='../login.php';</script>";
        }
    } else {
        echo "<script>alert('User not registered'); window.location.href='../login.php';</script>";
    }
}
?>