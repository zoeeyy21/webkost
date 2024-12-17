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
