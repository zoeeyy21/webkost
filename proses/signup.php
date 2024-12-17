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
    $email = $_POST["email"];
    $password = $_POST["password"];
    $tipe = $_POST["tipe"];

    $duplicate = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$username'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script> alert('username sudah ada'); </script>";
    }
    $query = "INSERT INTO tb_user VALUES('','$username','$email','$password','$tipe')";
    mysqli_query($koneksi, $query);
    echo "<script>alert('Buat akun sukses'); window.location.href='../signup.php';</script>";
}
?>