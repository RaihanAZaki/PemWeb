<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Form 1</title>
</head>
<body>
    <form action="form4.php" method="post">
        Nama Depan: <input type="text" name="namadepan"><br>
        Nama Belakang: <input type="text" name="namabelakang"><br>
    <input type="submit" value="kirim" name="tombol">
</form>
<?php 
    if (isset($_POST['tombol'])) {
        $nDepan = $_POST['namadepan'];
        $nBelakang = $_POST['namabelakang'];
        echo "Nama Depan :".$nDepan;
        echo "<br>Nama Belakang :".$nBelakang;
    }
    
?>
</body>
</html>