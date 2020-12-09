<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
</head>
<body style="background-color: grey">
    <style>
        th, tr, td{
            text-align: center;
        }
    </style>
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
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/lowongan/daftar">Daftar Kerja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produk/tampil">Pesan Software</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            List 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item active">List Software</a>
                            <a class="dropdown-item" href="/lowongan/show">List Lowongan</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <br><br><br>
        <h1 align="center">Daftar Software</h1>
        <br>

<table border='1' class="table table-bordered" style="width: 75%" align="center">
    <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Kode Software</th>
            <th>Macam Software</th>
            <th>Harga Software</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($produk as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->kode }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->harga }}</td>
            <td><a class="btn btn-primary" href="/produk/delete/{{ $p->id }}">Delete</a>
            | <a class="btn btn-primary" href="/produk/edit/{{ $p->id }}">Edit</a>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
    <br>
    <center><a class="btn btn-primary" href="/produk/insert" role="button">Insert Software</a></center>
</body>
</html>