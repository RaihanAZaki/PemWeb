<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style-html.css">
</head>
<body>

<?php
    require_once "header.php";
    require_once "simpan-insert.php"
?>

<!--<form action="" method="post">
<table>
    <tr>
        <td width="130">Nama Lengkap</td>
        <td><input type="text" name="nama_lengkap"></td>
    </tr>
    <tr>
        <td>No. HP</td>
        <td><input type="int" name="no_telp"></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td><input type="date" name="tanggal_lahir"></td>
    </tr>
    <tr>
        <td>kewarganegaraan</td>
        <td><input type="text" name="kewarganegaraan"></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td><input type="text" name="jenis_kelamin"></td>
    </tr>
    <tr>
        <td>Alamat Email</td>
        <td><input type="text" name="email"></td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td><input type="text" name="tempat_lahir"></td>
    </tr>
    <tr>
        <td>NIK / No. KTP</td>
        <td><input type="int" name="nik"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Simpan" name="proses"></td>
    </tr>
</table>
</form>-->

<div class="container">
        <header>DAFTAR MAHASISWA</header>

        <form action="#" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Detail Personak</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nama Lengkap</label>
                            <input type="text" placeholder="Masukan Nama Lengkap" name="nama_lengkap">
                        </div>

                        <div class="input-field">
                            <label>Tanggal Lahir</label>
                            <input type="date" placeholder="Masukan Tanggal Lahir" name="tanggal_lahir">
                        </div>

                        <div class="input-field">
                            <label>Alamat Email</label>
                            <input type="text" placeholder="Masukan Email" name="email">
                        </div>

                        <div class="input-field">
                            <label>No. HP</label>
                            <input type="number" placeholder="Masukan Nomor Handphone" name="no_telp">
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="jenis_kelamin">
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Kewarganegaraan</label>
                            <input type="text" placeholder="Masukan Kewarganegaraan" name="kewarganegaraan">
                        </div>

                        <div class="input-field">
                            <label>Tempat Lahir</label>
                            <input type="text" placeholder="Masukan Tempat Lahir" name="tempat_lahir">
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Detail Identitas</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>NIK / No. KTP</label>
                            <input type="number" placeholder="Masukan NIK" name="nik">
                        </div>
                    </div> 
                </div>
                
                <button class="sumbit" name="proses">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
        </form>
    </div>


</body>
</html>


