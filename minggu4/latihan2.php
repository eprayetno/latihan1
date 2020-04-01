<html>
<head>
<title>Latihan Looping</title>
</head>
<body>
<h2>Membuat perulangan tabel</h2>
<table border="1" cellpadding="10" cellspacing="0">
    <?php
    for ($b=1;$b<=10;$b++) {
        if ($b%2==1) {
            $warna = "pink";
        } else {
            $warna = "white";
        }
        echo "<tr bgcolor=$warna>";
        for ($k=1;$k<=8;$k++) {
            echo "<td>$b,$k</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>