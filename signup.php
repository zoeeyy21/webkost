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
    <title>Sign Up - PAGE</title>
    <link rel="stylesheet" href="css/signupp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div class="kotak" style="backdrop-filter: blur(7px);">
    <h2>Sign<span>Up</span></h2>
    <form action="proses/signup.php" method="POST">
        <div class="input">
            <input type="text" id="input" name="username" placeholder=" " require>
            <label for="input">Username</label>
        </div>  
        <div class="input">
            <input type="email" id="input" name="email" placeholder=" " require>
            <label for="input">Email</label>
        </div>  
        <div class="input">
            <input type="password" id="input" name="password" placeholder=" " require>
            <label for="input">Password</label>
        </div>  
        <div class="input">
            <input type="password" id="input" name="tipe" placeholder=" " require>
            <label for="input">Confirm password</label>
        </div>  
        <p>Have an account?<a href="login.php"> Login</a></p>
        <center>
        <button type="submit" name="submit">Sign Up</button>
        </center>
    </form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>