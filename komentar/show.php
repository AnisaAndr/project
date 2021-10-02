<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Data</title>
</head>

<body>
    <?php
    include '../database.php';
    $komentar = new Komentar();
    foreach ($komentar->show($_GET['id']) as $data) {
        $id = $data['id'];
        $nama = $data['nama'];
        $komen = $data['komentar'];
        $nama_wisata = $data['nama_wisata'];
    }
    ?>
    <fieldset>
        <legend>Show Data Komentar</legend>
        <table>
            <tr>
                <th>Nama</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
            </tr>
            <tr>
                <th>Komentar</th>
                <td><input type="textarea" name="komentar" value="<?php echo $komen; ?>" readonly></td>
            </tr>
            <tr>
                <th>Nama Wisata</th>
                <td><input type ="text" name="nama_wisata" cols="40" value="<?php echo $nama_wisata; ?>" readonly></td>
            </tr>
        </table>
    </fieldset>
</body>

</html>