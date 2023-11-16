<?php

$id = $_GET['id'];
require './../config/db.php';

$delete = mysqli_query($db_connect, "DELETE FROM products WHERE id = $id");
if ($delete) {
    header("Location:../show.php");
    die;
}