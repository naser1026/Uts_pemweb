<?php
require "./config/db.php";

$id=$_GET['id'];
$user = mysqli_query($db_connect, "SELECT name, price FROM products WHERE id = '$id'");
$user = mysqli_fetch_assoc($user);

$name = $user['name'];
$price = $user['price'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body>
    <form action="./backend/edit.php" method = "POST">
        <label>Nama Produk</label>
        <input type="text" name="name" value = <?= $name;?>>
        <label>Harga</label>
        <input type="text" name="price"value = <?= $price;?>>
        <input type="hidden" name = 'id' value = <?= $id; ?>>
        <input type="submit" name="save" value = "Simpan Perubahan">
    </form>
</body>
</html>