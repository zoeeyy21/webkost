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
$koneksi = mysqli_connect("localhost", "root", "", "sewa");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

function formatRupiah($angka)
{
    return number_format($angka, 0, ',', '.');
}
?>