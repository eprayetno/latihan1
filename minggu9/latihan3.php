<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode POST</title>
</head>
<body>
<?php
if (isset($_POST["submit"])) {
    echo "<h1>Selamat datang, ".$_POST["nama"]."</h1>";
}
?>
<form method="POST">
    Masukkan nama : 
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim</button>
</form>
</body>
</html>