<?php
include 'proses/koneksi.php';
session_start();

if (empty($_SESSION["username"])) {
    header("Location: login.php");
}


$id_produk = $_GET['id_produk'];
$query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = '$id_produk'");
$data = mysqli_fetch_assoc($query);


?>

<!-- Kelas SI-48-10 -->
<!-- Kelompok 03 -->
<!-- Anggota Kelompok -->
<!-- 1. Geoffrey Putra (102022400215) -->
<!-- 2. Cedric Satria Wibawa (102022400189) -->
<!-- 3. Faris Yahya Ayyash Alfatih (102022400029) -->
<!-- 4. Ridho Muhammad Zahran (102022400293) -->
<!-- 5. Rizky Firman Nanda (102022400203) -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit - PAGE</title>
    <link rel="stylesheet" href="css/editt.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body style="background-color: #F5F5F5;">
    <!-- Navbar Start -->
    <nav class="navbar" style="position: fixed;">
        <div class="navbar-container">
            <div class="logo">
                <h2>Juragan<span>Kost.</span></h2>
            </div>
            <ul class="menu-items">
                <li><a href="admin.php#home">Home</a></li>
                <li><a href="admin.php#produk">Produk</a></li>
                <li><a href="#pemesan">Pemesan</a></li>
            </ul>
            <a href="logout.php" id="shopping-cart-button"><i data-feather="log-out" class="shopping"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <div class="container-fluid" style="margin-top: 6em;">
        <form action="proses/edit.php" method="POST">
            <input type="hidden" value="<?php echo $data["id_produk"] ?>" name="id_produk">
            <div class="row">
                <div class="col-7">
                    <div class="input">
                        <label for="">Nama Produk</label><br>
                        <input type="text" class="mt-3" name="nama_produk" value="<?php echo $data["nama_produk"]; ?>">
                    </div>
                    <div class="input">
                        <label for="">Harga</label><br>
                        <input type="text" class="mt-3" name="harga" value="<?php echo $data["harga"]; ?>">
                    </div>
                    <div class="input">
                        <label for="">Jenis</label><br>
                        <input type="text" class="mt-3" name="jenis" value="<?php echo $data["jenis"]; ?>">
                    </div>
                    <div class="input">
                        <label for="">Lokasi</label><br>
                        <input type="text" class="mt-3" name="lokasi" value="<?php echo $data["lokasi"]; ?>">
                    </div>
                    <div class="input">
                        <label for="">Stok</label><br>
                        <input type="number" class="mt-3" name="stok" value="<?php echo $data["stok"]; ?>" required>
                    </div>
                </div>
                <div class="col-5">
                    <div class="photo">
                        <img id="profileImage" src="asset/<?php echo $data["foto"]; ?>" width="50%"
                            style="height: 13em;width: 13em;" alt=""><br>
                        <input requ type="file" name="foto" class="mt-5" value="<?php echo $data["foto"]; ?>"
                            onchange="updateImagePreview(event)" required>
                    </div>
                    <a><button class="upload" type="submit" name="submit">Upload</button></a>
                </div>
            </div>
        </form>
    </div>


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
        function updateImagePreview(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function (e) {
                const imgElement = document.getElementById('profileImage');
                imgElement.src = e.target.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>