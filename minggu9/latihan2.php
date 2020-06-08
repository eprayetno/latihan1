<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Box Office - <?= $_GET["judul"]?></title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
<tr>
    <td><img src=<?= $_GET["poster"]?>></td>
    <td>
        <h3><?= $_GET["judul"]?> (<?= $_GET["tahun"]?>)</h3><br>
        Genre: <?= $_GET["genre"]?><br>
        Sutradara: <?= $_GET["sutradara"]?><br>
    </td>
</tr>
</table>
<a href="latihan1.php"><br>Kembali</a>    
</body>
</html>