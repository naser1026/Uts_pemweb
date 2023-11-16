<?php

require './../config/db.php';

if(isset($_POST['save'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    $update = mysqli_query($db_connect,"UPDATE products SET name='$name', price='$price' WHERE id='$id'");
    
    if ($update) {
        header("Location:../show.php");
        die;
    }
}