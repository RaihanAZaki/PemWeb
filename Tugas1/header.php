<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="style-p.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">-->
</head>


<body style="background: #eaeaea;">

<?php
    
?>

        <!-- Header -->
        <section class="header">
            <nav>
                <a href="index.php"><img src="img/YUPEJE.png" class="logo"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.php">Beranda</a></li>
                        <li><a href="detail.php">Jalur Seleksi</a></li>
                        <li><a href="#">Informasi</a></li>
                        <a href="" class="hero-btn">Masuk</a>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
    
            <div class="text-box">
                <h1>UNIVERSITAS PEMBANGUNAN JAYA</h1>
                <p>Ayo Bergabung Bersama Kami Dalam Membangun Insan Unggulan Jaya <br/> Dalam Lingkup Universitas Pembangunan Jaya.
                </p>
                <a href="tambah-data.php" class="hero-btn">Daftar Sekarang</a>
            </div>
        </section>

</body>
</html>
