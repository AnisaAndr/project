<?php
include '../database.php';
$komentar = new Komentar();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $nama = $_POST['nama'];
    $komen = $_POST['komentar'];
    $id_admin = $_POST['id_admin'];

    if ($aksi == "create") {
        $komentar->create($nama, $komen, $id_admin);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $komentar->update($id, $nama, $komen, $id_admin);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $komentar->delete($id);
        header("location:index.php");
    }

}