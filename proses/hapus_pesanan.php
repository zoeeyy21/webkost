<!-- Kelas SI-48-10 -->
<!-- Kelompok 03 -->
<!-- Anggota Kelompok -->
<!-- 1. Geoffrey Putra (102022400215) -->
<!-- 2. Cedric Satria Wibawa (102022400189) -->
<!-- 3. Faris Yahya Ayyash Alfatih (102022400029) -->
<!-- 4. Ridho Muhammad Zahran (102022400293) -->
<!-- 5. Rizky Firman Nanda (102022400203) -->
 
 <?php
    include "koneksi.php";
    $id= $_GET['id'];
    $query = mysqli_query($koneksi,"DELETE FROM pesanan WHERE id = $id");
    if($query)
    {
        echo "<script>alert('Hapus Berhasil'); window.location.href='../admin.php#pemesanan';</script>";
    }
    else {
        echo "<script>alert('Hapus Gagal'); window.location.href='../admin.php#pemesanan';</script>";

    }
?>