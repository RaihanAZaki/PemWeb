<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="style-p.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">-->
</head>


<body style="background: #eaeaea;">

<?php
    require_once "header.php";
?>

        <div class="cons">
            <section class="jurusan">
                <h2>Jalur Seleksi</h2>
                <p>Daftar Jalur Seleksi Masuk</p>
                <div class="row">
                    <div class="card">
                        <div class="image">
                            <img src="../img/upj2.png" alt="">
                        </div>
                    <div class="konten">
                        <div class="title">PMB - REGULAR RAPOR</div>
                        <div class="sub-title">Tahun Akademik 2023/2024 - PMB Reguler Rapor Gelombang 1</div>
                        <div class="bottom">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mattis auctor nulla, nec mattis quam ornare id.</p>
                        <button><a href="detail.php">Detail</a></button>
                        <button><a href="tambah-data.php">Daftar</a></button>
                    </div>
                    
                </div>
            </section>
        </div>
<!--JavaScript untuk Toogle Menu-->
<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script>
        $('.card').hover(function(){
            if($(this). hasClass("active")) {
                $('.card .bottom').slideUp(function(){
                    $('.card').removeClass("active");
                });
            }else {
                $('.card').addClass("active");
                $('.card .bottom').stop().slideDown();
            }
        }) 
    </script>
    
</body>
</html>