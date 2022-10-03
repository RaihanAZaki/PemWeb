<!DOCTYPE html>
<html lang="en">
<head>
  <title>Simpan Insert</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php
include "koneksi.php";

if(isset($_POST['proses'])) {
    mysqli_query($conn, "INSERT INTO daftar SET
    nama_lengkap = '$_POST[nama_lengkap]',
    no_telp = '$_POST[no_telp]',
    tanggal_lahir = '$_POST[tanggal_lahir]',
    kewarganegaraan = '$_POST[kewarganegaraan]',
    jenis_kelamin = '$_POST[jenis_kelamin]',
    email = '$_POST[email]',
    tempat_lahir = '$_POST[tempat_lahir]',
    nik = '$_POST[nik]'");

    echo "Data Mahasiswa Baru Telah Tersimpan";
} else {
    echo "Data Mahasiswa Baru Tidak Tersimpan"
}
?>
 
</body>
</html>
