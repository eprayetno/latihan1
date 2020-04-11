<?php
function salam($waktu, $nama)
{
    return "Selamat $waktu, $nama!";
}
?>
<html>
<head>
<title>Latihan Fuction</title>
</head>
<body>
    <h1><?php echo salam("Pagi","Eka")?></h1>
</body>
</html>