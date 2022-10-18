<?php 
include_once "koneksi.php";
?>

<?php
     $select = mysqli_query($conn, "SELECT * FROM data_diri");
      if($diri = mysqli_fetch_array($select)) 
?>

<?php
    $select = mysqli_query($conn, "SELECT * FROM kuliah");
    if($kuliah = mysqli_fetch_array($select)) 
?>

<?php 
    $select = mysqli_query($conn, "SELECT * FROM portofolio");
    if($portofo = mysqli_fetch_array($select)) 
 
?>

<?php
    $select = mysqli_query($conn, "SELECT * FROM sertifikat");
    if($sertif = mysqli_fetch_array($select)) 
?>

<?php
    $select = mysqli_query($conn, "SELECT * FROM foto_diri");
    if($fotdi = mysqli_fetch_array($select)) 
?>

<?php
    $select = mysqli_query($conn, "SELECT * FROM akun");
    if($akun = mysqli_fetch_array($select)) 
?>