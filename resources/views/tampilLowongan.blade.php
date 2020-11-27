<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lowongan</title>
</head>
<body>
<table border='1'>
    <tr>
        <th>Id</th>
        <th>Kode Lowongan</th>
        <th>Posisi</th>
        <th>Jumlah Lowongan</th>
    </tr>
    @foreach($lowongan as $l)
        <tr>
            <td>{{ $l->id }}</td>
            <td>{{ $l->kode_lowongan }}</td>
            <td>{{ $l->posisi }}</td>
            <td>{{ $l->jumlah_lowongan }}</td>
        </tr>
    @endforeach
    </table>
</body>
</html>