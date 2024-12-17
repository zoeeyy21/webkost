<!-- Kelas SI-48-10 -->
<!-- Kelompok 03 -->
<!-- Anggota Kelompok -->
<!-- 1. Geoffrey Putra (102022400215) -->
<!-- 2. Cedric Satria Wibawa (102022400189) -->
<!-- 3. Faris Yahya Ayyash Alfatih (102022400029) -->
<!-- 4. Ridho Muhammad Zahran (102022400293) -->
<!-- 5. Rizky Firman Nanda (102022400203) -->

<?php declare(strict_types=1);
session_start();
if (empty($_SESSION["username"])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Page</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://unpkg.com/feather-icons"></script>

</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar" style="position: fixed;">
        <div class="navbar-container">
            <div class="logo">
                <h2>Juragan<span>Kost.</span></h2>
            </div>
            <ul class="menu-items">
                <li><a href="#home">Home</a></li>
                <li><a href="#produk">Product</a></li>
                <li><a href="#about">About Us</a></li>
            </ul>
            <a href="logout.php" id="shopping-cart-button" onclick="return confirmLogout();">
                <i data-feather="log-out" class="shopping"></i>
            </a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Halaman 1 -->

    <div class="hal1" id="home">
        <div class="text">
            <h1>Welcome to<br>Juragan Kost</h1>
            <h5><br>Juragan Kost adalah platform persewaan kos inovatif yang memudahkan mahasiswa<br>dalam mencari
                hunian nyaman
                dan berkualitas.<br> Kami menyediakan berbagai pilihan kamar kost, mulai dari tipe kecil,<br> menengah,
                besar,
                hingga on-budget, sesuai kebutuhan dan anggaran Anda.<br> Praktis, cepat, dan tanpa ribet!</h5>
        </div>
        <img class="mic" src="asset/Kamardashboard.jpg" alt="">
        <img class="camera" src="asset/ " alt="">
        <a href="#produk"><button>Product</button></a>
    </div>
    <!-- Halaman 1 End -->



    <!-- Halaman 4 -->
    <div class="container-fluid" style="margin-top: 6em;" id="produk">
        <div class="title">
            <h2>Pilihan Kamar Kost</h2>
        </div>
        <div class="container" style="margin-top: 3em;">
            <form class="d-flex justify-content-center" role="search" method="GET" action="">
                <input class="cari" type="search" name="search" placeholder="Cari Kost"
                    value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                <button class="cari-tombol" type="submit"><i data-feather="search" style="color: #004577;"></i></button>
            </form>
        </div>
        <div class="row" style="margin-top: 3em;">
            <!-- Perulangan Card -->
            <?php
            require "proses/koneksiuser.php";
            $search = isset($_GET['search']) ? $_GET['search'] : '';
            if ($search) {
                $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE nama_produk LIKE '%$search%'");
            } else {
                $query = mysqli_query($koneksi, "SELECT * FROM produk");
            }

            while ($data = mysqli_fetch_array($query)) { 
    if ($data['stok'] > 0) { ?>
        <div class="col-3 d-flex justify-content-center mb-5">
            <div class="card shadow" style="width: 18rem;">
                <img src="asset/<?php echo $data['foto']; ?>" class="card-img-top" alt="..." style="height: 12em">
                <div class="card-body" style="background-color: #F5F5F5;">
                    <p class="card-title text-muted"><?php echo $data['jenis']; ?></p>
                    <h5 class="card-title"><?php echo $data['nama_produk']; ?></h5>
                    <h5 class="card-title" style="color: #004577;">Rp. <?php echo formatRupiah($data['harga']); ?>
                        <span class="text-muted">/Bulan</span>
                    </h5>
                    <h6 style="color: #004577; font-weight: normal;">Stok Tersedia:
                        <span style="color: #28a745;"><?php echo $data['stok']; ?> kamar</span>
                    </h6>
                    <div class="harga mt-4 d-flex">
                        <p class="d-flex" style="gap: 0.5em"><i data-feather="map-pin" class="shopping"></i>Bandung
                        </p>
                        <a href="detailproduk.php?id=<?= $data['id_produk'] ?>">
                            <button class="booking">Booking</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="col-3 d-flex justify-content-center mb-5">
            <div class="card shadow" style="width: 18rem;">
                <img src="asset/<?php echo $data['foto']; ?>" class="card-img-top" alt="..." style="height: 12em">
                <div class="card-body" style="background-color: #F5F5F5;">
                    <p class="card-title text-muted"><?php echo $data['jenis']; ?></p>
                    <h5 class="card-title"><?php echo $data['nama_produk']; ?></h5>
                    <h5 class="card-title" style="color: #004577;">Rp. <?php echo formatRupiah($data['harga']); ?>
                        <span class="text-muted">/Bulan</span>
                    </h5>
                    <h6 style="color: #004577; font-weight: normal;">Stok Tersedia:
                        <span style="color: #28a745;"><?php echo $data['stok']; ?> kamar</span>
                    </h6>
                    <div class="harga mt-4 d-flex">
                        <p class="d-flex" style="gap: 0.5em"><i data-feather="map-pin" class="shopping"></i>Bandung
                        </p>
                        <button class="booking" disabled>Booking</button>
                    </div>
                </div>
            </div>
        </div>
    <?php } 
} 
 ?>
        </div>
    </div>
    <!-- Halaman 2 -->
    <div class="about" id="about">
        <div class="title">
            <h2>Tentang Kami</h2>
        </div>
        <div class="container-fluid">
            <div class="row baris">
                <div class="col-4 kolom">
                    <div class="kot shadow">
                        <div class="ket">
                            <h5>Layanan 24/7</h5>
                        </div>
                        <div class="log">
                            <i data-feather="clock"></i>
                        </div>
                        <p class="text-center mt-4 p-3">Kami adalah penyedia layanan pencarian kost terpercaya yang
                            berkomitmen untuk memenuhi kebutuhan anda.</p>
                    </div>
                </div>
                <div class="col-4 kolom">
                    <div class="kot shadow">
                        <div class="ket">
                            <h5>Jaminan Kepuasan</h5>
                        </div>
                        <div class="log">
                            <i data-feather="package"></i>
                        </div>
                        <p class="text-center mt-4 p-3">Kami menjamin kepuasan Anda dengan layanan persewaan Kos-Kosan
                            terbaik. Kepuasan pelanggan adalah prioritas utama kami.</p>
                    </div>
                </div>
                <div class="col-4 kolom">
                    <div class="kot shadow">
                        <div class="ket">
                            <h5>Bebas Komisi</h5>
                        </div>
                        <div class="log">
                            <i data-feather="truck"></i>
                        </div>
                        <p class="text-center mt-4 p-3">Kami adalah layanan kost dengan bebas komisi sehingga memudahkan
                            para pembeli tanpa membebani dengan biaya tambahan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Halaman 2 End -->

    <footer style="background-color: #F5F5F5;padding-bottom: 1em">
        <div class="container" style="margin-top: 7em;color:#004577;">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-3 mt-4 foter">
                    <h4>LINK</h4>
                    <p class="mt-3">
                        <a href="#home" class="footer-hover">Home</a>
                    </p>
                    <p>
                        <a href="#produk" class="footer-hover">Product</a>
                    </p>
                    <p>
                        <a href="#about" class="footer-hover">About Us</a>
                    </p>
                </div>
                <div class="col-3 mt-4">
                    <h4>HUBUNGI KAMI</h4>
                    <div class="mt-5">
                        <p> +6282190908787</p>
                        <p>cs@juragankost.com</p>
                    </div>
                </div>
                <div class="col-3 mt-4">
                    <h4>ALAMAT</h4>
                    <div class="mt-5">
                        Jl. Telekomunikasi No. 1 Terusan Buah Batu. Bandung 40257, Jawa Barat, Indonesia<br>
                    </div>
                </div>
                <div class="col-3 mt-4">
                    <h4>TEAM</h4>
                    <div class="mt-2">
                        Faris Yahya<br>Cedric Satria<br>Geoffrey Putra<br>Ridho Muhammad<br>Rizky Firman
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script>
        feather.replace();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script>
        function confirmLogout() {
            return confirm("Apakah Anda yakin ingin logout?");
        }
    </script>
</body>

</html>