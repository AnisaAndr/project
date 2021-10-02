<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>
        <nav>
            <a href="../admin/index.php">Data Wisata</a> |
            <a href="index.php">Data Komentar</a>
        </nav>
    </center>
    <center>Data Komentar</center>
    <fieldset>
        <legend>Data Komentar</legend>
        <a href="create.php">Tambah Komentar</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Komentar</th>
                <th>Nama Wisata</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
include '../database.php';
$komentar = new Komentar();
$no = 1;

foreach ($komentar->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['komentar']; ?></td>
                    <td><?php echo $data['nama_wisata']; ?></td>

                    <td>
                        <a href="show.php?id=<?php echo $data['id']; ?>">Show</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    </td>
                    <button type="submit" name="save" 
                    onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">Delete
                            </button>
                </tr>
            <?php
}
?>
    </fieldset>
</body>

</html>