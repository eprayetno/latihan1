<?php
$mahasiswa = [
    ["Eko","19.51.0027","Sistem Informasi","echo.prayetno@gmail.com"],
    ["Hadi","19.51.0027","Sistem Informasi","hadi.prayetno@gmail.com"],   
    ["Prayetno","19.51.0027","Sistem Informasi","prayetno@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php
        foreach ($mahasiswa as $mhs):
            foreach ($mhs as $m):
            echo "<li>$m</li>";
            endforeach;
            echo "</br>";
        endforeach;
        ?>
    </ul>
</body>
</html>