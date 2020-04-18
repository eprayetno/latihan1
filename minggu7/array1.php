<?php
//perulangan pada array
$angka = [1,3,5,7,9,11,13,17];
?>
<html>
<head>
<title>Latihan Array</title>
<style>
    .kotak {
        width: 50px;
        height: 50px;
        background-color: salmon;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
    }
    .clear {
        clear: both;
    }
</style>
</head>
<body>
<?php
for ($i=0;$i<=7;$i++) {
    echo "<div class='kotak'>$angka[$i]</div>";
}
echo "<div class='clear'></div>";
foreach ($angka as $a):
    echo "<div class='kotak'>$a</div>";
endforeach;
?>
</body>
</html>
