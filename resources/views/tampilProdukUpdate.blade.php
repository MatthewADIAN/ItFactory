<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body>
    <form method="post" action="/produk/ubah">
        {{ csrf_field() }}
        <table>

        @foreach($getById as $gBI)
            <input type="hidden" name="id" value="{{ $gBI->id }}">
            <tr><td>Kode Produk</td><td><input type="text" name="kode" value="{{ $gBI->kode }}" required></td></tr>
            <tr><td>Nama Produk</td><td><input type="text" name="posisi" value="{{ $gBI->nama }}" required></td></tr>
            <tr><td>Harga Produk</td><td><input type="number" name="jumlah" value="{{ $gBI->harga }}" required></td></tr>
            <tr><td></td><td><input type="submit" value="Update"></td></tr>
        @endforeach    
        </table>
    </form>
</body>
</html>