<html>
<head>
    <title>Belajar PHP</title>
</head>
<body>
<?php
#Operator Perbandingan
var_dump(1 < 5);
echo "</br>";
var_dump(1 > 5);
echo "</br>";
var_dump(1 <= 5);
echo "</br>";
var_dump(1 >= 5);
echo "</br>";
var_dump(1 == 5);
echo "</br>";
var_dump(1 != 5);
echo "</br>";

#Operator Identitas
var_dump(1 === "1");
echo "</br>";
var_dump(1 !== "1");
echo "</br>";

#Operator Logika
$x = 10;
var_dump($x < 20 && $x % 2 == 0);
echo "</br>";
var_dump($x < 20 || $x % 2 == 0);
?>
</body>
</html>