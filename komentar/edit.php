<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit  Data</title>
</head>
<?php
include '../database.php';
$admin = new Admin();

$komentar = new Komentar();
foreach ($komentar->edit($_GET['id']) as $data) {
    $id = $data['id'];
    $nama = $data['nama'];
    $komen = $data['komentar'];
    $id_admin = $data['id_admin'];
}
?>
<body>
    <fieldset>
        <legend>Input Komentar</legend>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="update">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" required></td>
                </tr>
                <tr>
                    <th>Komentar</th>
                    <td><input type="textarea" name="komentar" value="<?php echo $komen; ?>" required></td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="save" >Simpan </button>
                    </th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>