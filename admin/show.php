<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
</head>

<body>
    <?php
include '../database.php';
$admin = new Admin();
foreach ($admin->show($_GET['id']) as $data) {
    $id = $data['id'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $wisata = $data['wisata'];
}
?>
    <fieldset>
        <legend>Show Data Wisata</legend>
        <table>
            <tr>
                <th>Nama Pengunjung</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><input type="textarea" name="alamat" colspan = 2 rowspan = 2 
                value="<?php echo $alamat; ?>" readonly></td>
            </tr>
            <tr>
                <th>Nama Wisata</th>
                <td><input type="text" name="wisata" value="<?php echo $wisata; ?>" readonly></td>
            </tr>
        </table>
    </fieldset>
</body>

</html>