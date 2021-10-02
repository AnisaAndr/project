<?php

include '../database.php';
$id = $_GET['id'];
$admin = "delete from admin where id='$id'";
mysqli_query($koneksi, $admin);

header("location:index.php");

?>