<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body style="background-color: grey">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <nav class="navbar navbar-dark bg-dark fixed-top">
            <a class="navbar-brand">It Factory Website</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/lowongan/daftar">Daftar Lowongan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produk/show">Beli Jasa</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item active" href="/produk/show">Jasa</a>
                            <a class="dropdown-item" href="/lowongan/show">List Lowongan</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <br><br><br>
        <h1 align="center">Edit Data Produk</h1>
        <br>
    <form method="post" action="/produk/ubah">
        {{ csrf_field() }}
        <table class="table table-borderless table-dark" style="width: auto" align="center">

        @foreach($getById as $gBI)
            <input type="hidden" name="id" value="{{ $gBI->id }}">
            <tr><td align="right">Kode Produk</td><td><input type="text" name="kode" value="{{ $gBI->kode }}" required></td></tr>
            <tr><td align="right">Nama Produk</td><td><input type="text" name="nama" value="{{ $gBI->nama }}" required></td></tr>
            <tr><td align="right">Harga Produk</td><td><input type="text" name="harga" value="{{ $gBI->harga }}" required></td></tr>
        @endforeach    
        </table>
        <center><input class="btn btn-primary" type="submit" value="Update"></center>
    </form>
</body>
</html>