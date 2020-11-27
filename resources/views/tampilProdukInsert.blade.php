<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data Produk</title>
</head>
<body>
    <form method="post" action="/produk/save">
        {{ csrf_field() }}
        <table>
            <tr><td>Kode Produk</td><td><input type="text" name="kode" required></td></tr>
            <tr><td>Nama Produk</td><td><input type="text" name="nama" required></td></tr>
            <tr><td>Harga Produk</td><td><input type="number" name="harga" required></td></tr>
            <tr><td></td><td><input type="submit" value="Insert"></td></tr>
        </table>
    </form>
</body>
</html>