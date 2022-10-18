<?php
include_once "koneksi.php";

if(isset($_POST['nama_lengkap']) and isset($_POST['email']) and isset($_POST['subject']) and isset($_POST['pesan'])){
    $semail = $_POST['email'];
    $snama = $_POST['nama_lengkap'];
    $ssabjek = $_POST['subject'];
    $spesan = $_POST['pesan'];

    $querySQL = "INSERT INTO pesan (nama_lengkap, email, subject, pesan) VALUES('$snama','$semail','$ssabjek','$spesan')";

    $execSQL = mysqli_query($conn, $querySQL);

    if($execSQL){
        // header('Location: contact.php?sent=1');
        echo"Berhasil";
        // exit;
    } else {
        // header('Location: contact.php?sent=0');
        echo"Gagal";
        // exit;
    }
}

?>