<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data Lowongan</title>
</head>
<body>
    <form method="post" action="/lowongan/save">
        {{ csrf_field() }}
        <table>
            <tr><td>Kode Lowongan</td><td><input type="text" name="kode" required></td></tr>
            <tr><td>Posisi</td><td><input type="text" name="posisi" required></td></tr>
            <tr><td>Jumlah Lowongan</td><td><input type="number" name="jumlah" required></td></tr>
            <tr><td></td><td><input type="submit" value="Insert"></td></tr>
        </table>
    </form>
</body>
</html>