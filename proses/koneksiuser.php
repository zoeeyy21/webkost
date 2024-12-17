<?php
    $koneksi = mysqli_connect("localhost", "root", "", "sewa");

    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    function formatRupiah($angka) {
        return number_format($angka, 0, ',', '.');
    }
?>
