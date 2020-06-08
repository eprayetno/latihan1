<?php
//cek tombol submit
if (isset($_POST["submit"])) {
    if ($_POST["user"]=="admin" && $_POST["pass"]=="123") {
        header("Location: admin.php");
        exit;
    } else {
        $eror = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
<h1>Login Admin</h1>
<?php
if (isset($eror)) {
    echo "<p style='color: red; font-style: italic'>Username atau password salah</p>";
}
?>
<form action="" method="POST">
<table>
<tr>
    <td>Username:</td>
    <td><input type="text" name="user"></td>
</tr>
<tr>
    <td>Password</td>
    <td><input type="password" name="pass"></td>
</tr>
<td>
<button type="submit" name="submit">Login</button>
</td>
</table>
<form>
</body>
</html>