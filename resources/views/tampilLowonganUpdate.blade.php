<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lowongan</title>
</head>
<body>
    <form method="post" action="/lowongan/ubah">
        {{ csrf_field() }}
        <table>

        @foreach($getById as $gBI)
            <input type="hidden" name="id" value="{{ $gBI->id }}">
            <tr><td>Kode Lowongan</td><td><input type="text" name="kode" value="{{ $gBI->kode_lowongan }}" required></td></tr>
            <tr><td>Posisi</td><td><input type="text" name="posisi" value="{{ $gBI->posisi }}" required></td></tr>
            <tr><td>Jumlah Lowongan</td><td><input type="number" name="jumlah" value="{{ $gBI->jumlah_lowongan }}" required></td></tr>
            <tr><td></td><td><input type="submit" value="Update"></td></tr>
        @endforeach    
        </table>
    </form>
</body>
</html>