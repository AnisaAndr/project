<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            color : black;
            background-color : cadetblue;
        }
    </style>
</head>
<body>
    <center>Halaman Login</center>
    <fieldset>
        <legend>Halaman Login</legend>
        <form action="admin/index.php" method="post">
            <table align = "center">
            <tr>
            <td> <input type="text" name="username" placeholder = "Masukkan Username"></td>
            </tr>

            <tr>
            <td><input type="password" name="password" placeholder="Masukan Password" ></td>
            </tr>

            <tr>
            <td><input type="email" name="email" placeholder="Masukan Email"></td>
        </tr>

            <tr>
            <td><button type="submit" name="login">Login</button></td>
            </tr>
        </table>
        </form>
    </fieldset>
</body>
</html>