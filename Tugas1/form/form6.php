<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Form 1</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Nama Depan: <input type="text" name="namadepan"><br>
        Nama Belakang: <input type="text" name="namabelakang"><br>
    <input type="submit" value="kirim" name="tombol">
</form>
<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nDepan = bersihkan_input($_POST['namadepan']);
        $nBelakang = bersihkan_input($_POST['namabelakang']);
        echo "Nama Depan :".$nDepan;
        echo "<br>Nama Belakang :".$nBelakang;
    }
    function bersihkan_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
</body>
</html>