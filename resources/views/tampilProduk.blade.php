<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
</head>
<body>
<table border='1'>
    <tr>
        <th>Id</th>
        <th>Kode Produk</th>
        <th>Nama Produk</th>
        <th>Harga Produk</th>
    </tr>
    @foreach($produk as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->kode }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->harga }}</td>
        </tr>
    @endforeach
    </table>
</body>
</html>