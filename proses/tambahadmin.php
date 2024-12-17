<?php
include "koneksi.php";

// Ambil data dari form
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$jenis = $_POST['jenis'];
$lokasi = $_POST['lokasi'];
$deskripsi = $_POST['deskripsi'];
$stok = $_POST['stok']; // Ambil stok dari form input
$foto = $_POST['foto'];

// Query SQL untuk memasukkan data produk termasuk stok
$query = mysqli_query($koneksi, "INSERT INTO produk (nama_produk, harga, foto, jenis, lokasi, deskripsi, stok) 
                                 VALUES ('$nama_produk', '$harga', '$foto', '$jenis', '$lokasi', '$deskripsi', '$stok')");

// Cek apakah query berhasil dijalankan
if ($query) {
    echo "<script>alert('Input berhasil'); window.location.href='../admin.php#produk';</script>";
} else {
    echo "<script>alert('Input gagal'); window.location.href='../tambahadmin.php';</script>";
}
?>

<!-- Kelas SI-48-10 -->
<!-- Kelompok 03 -->
<!-- Anggota Kelompok -->
<!-- 1. Geoffrey Putra (102022400215) -->
<!-- 2. Cedric Satria Wibawa (102022400189) -->
<!-- 3. Faris Yahya Ayyash Alfatih (102022400029) -->
<!-- 4. Ridho Muhammad Zahran (102022400293) -->
<!-- 5. Rizky Firman Nanda (102022400203) -->