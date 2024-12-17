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
require "koneksi.php";

$id_produk = $_POST['id_produk'];
$foto = $_POST['foto'];
$nama_produk = $_POST['nama_produk'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$lokasi = $_POST['lokasi'];
$stok = $_POST['stok']; // Tambahkan stok di sini

$query = mysqli_query($koneksi,"UPDATE produk SET 
    nama_produk='$nama_produk', 
    harga='$harga', 
    foto='$foto', 
    jenis='$jenis', 
    lokasi='$lokasi', 
    stok='$stok'  -- Tambahkan stok dalam query
    WHERE id_produk ='$id_produk'");

if($query){
    echo "<script>alert('Update berhasil'); window.location.href='../admin.php#produk';</script>";
} else {
    echo "<script>alert('Update gagal'); window.location.href='../edit.php';</script>";
}
?>
