<!DOCTYPE html>
<?php
$film = [
    [
        "judul" => "Parasite",
        "tahun" => "2019",
        "genre" => "drama",
        "sutradara" => "Bong Joon Ho",
        "poster" => "parasite.jpg"
    ],
    [
        "judul" => "Joker",
        "tahun" => "2019",
        "genre" => "drama",
        "sutradara" => "Todd Phillips",
        "poster" => "joker.jpg"
    ],
    [
        "judul" => "Inception",
        "tahun" => "2010",
        "genre" => "action",
        "sutradara" => "Christopher Nolan",
        "poster" => "inception.jpg"
    ],
    [
        "judul" => "The Shawshank Redemption",
        "tahun" => "1994",
        "genre" => "drama",
        "sutradara" => "Frank Darabont",
        "poster" => "the-shawshank-redemption.jpg"
    ],
    [
        "judul" => "Forrest Gump",
        "tahun" => "1994",
        "genre" => "romance",
        "sutradara" => "Robert Zemeckis",
        "poster" => "forrest-gump.jpg"
    ]
]
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Box Office</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
<?php foreach ($film as $f): ?>
<tr>
    <td><img src="<?= $f["poster"]?>"></td>
    <td>
        <h3><?= $f["judul"]?> (<?= $f["tahun"]?>)</h3><br>
        Genre: <?= $f["genre"]?><br>
        Sutradara: <?= $f["sutradara"]?><br>
    </td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>