<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Form 1</title>
    <style>
     .error {color: #FF0000;}
    </style>
</head>
<body>
    <?php 
        $nDepan = $nDepanErr = "";
        $nBelakang = $nBelakangErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["namadepan"])) {
                $nDepanErr = "Nama Depan Tidak Boleh Kosong";
            } 
            else {
                $nDepan = bersihkan_input($_POST["namadepan"]);
            }
            if (empty($_POST["namabelakang"])) {
                $nBelakangErr = "Nama Belakang Tidak Boleh Kosong";
            } 
            else {
                $nBelakang = bersihkan_input($_POST["namabelakang"]);
            }    
           
        }
        function bersihkan_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Nama Depan: <input type="text" name="namadepan" require> <span class="error">* <?php echo $nDepanErr;?></span><br>
        Nama Belakang: <input type="text" name="namabelakang" require> <span class="error">* <?php echo $nBelakangErr;?></span><br>
    <input type="submit" value="kirim" name="tombol">
    <?php
         echo "<br>Nama Depan :".$nDepan;
         echo "<br>Nama Belakang :".$nBelakang;
    ?>
</form>

</body>
</html>