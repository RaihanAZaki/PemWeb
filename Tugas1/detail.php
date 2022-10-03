<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jalur Seleksi</title>
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

        <!-- DETAIL -->
        <div class="detail">
            <section class="detail-col">
                <p><a href="index.php"> Home </a></p> <p> > </p> 
                <p><a href="detail.php"> Jalur Seleksi</a></p> <p> > </p>
                <p> PMB - Reguler Rapor </p>
            </section>
        </div>

        <!-- REGULER -->
        <div class="reguler">
            <section class="pmb">
                <h2>PMB - REGULER PERINGKAT KELAS <span> BERBAYAR </span> </h2> 
                <p>Tahun Akademik 2023 / 2024 - PMB - Reguler Peringkat Kelas Gelombang 1</p>
                <div class="row">
                    <div class="reguler-col">
                        <p> Awal Pendaftaran </p>
                        <p> Periode Pendaftaran </p>
                    </div>

                    <div class="reguler-col">
                        <p> Akhir Pendaftaran</p>
                        <p> Sistem Kuliah </p>
                    </div>

                    <div class="reguler-col">
                        <p> Gelombang </p>
                    </div>
                </div>
                <a href="tambah-data.php" class="hero-btn-dua"><i class="fa fa-user-plus btn-icon-left">   DAFTAR_PMB</i></a>

                <h4> PROGRAM STUDI </h4>
                <table>
                    <tr id="header">
                        <th>Sarjana</th>
                        <th>Program Studi</th>
                    </tr>

                    <tr>
                        <td>S1 - Strata 1</td>
                        <td>Informatika</td>
                    </tr>
                    
                    <tr>
                        <td>S1 - Strata 1</td>
                        <td>Desain Komunikasi Visual</td>
                    </tr>
                    
                    <tr>
                        <td>S1 - Strata 1</td>
                        <td>Teknik Sipil</td>
                    </tr>

                    <tr>
                        <td>S1 - Strata 1</td>
                        <td>Akutansi</td>
                    </tr>

                    <tr>
                        <td>S1 - Strata 1</td>
                        <td>Ilmu Komunikasi</td>
                    </tr>

                    <tr>
                        <td>S1 - Strata 1</td>
                        <td>Psikologi</td>
                    </tr>

                    <tr>
                        <td>S1 - Strata 1</td>
                        <td>Desain Produk</td>
                    </tr>

                    <tr>
                        <td>S1 - Strata 1</td>
                        <td>Menejemen</td>
                    </tr>

                    <tr>
                        <td>S1 - Strata 1</td>
                        <td>Sistem Informasi</td>
                    </tr>
                </table>
            </section>
        </div>

        <!-- TABEL -->
        <div class="table-row">
            <div class="table-col">


            </div>
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
    
</body>
</html>