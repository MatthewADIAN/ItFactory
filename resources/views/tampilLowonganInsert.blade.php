<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data Lowongan</title>
</head>
<body style="background-color: #C7AC92">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <nav class="navbar navbar-light bg-light fixed-top">
            <a class="navbar-brand">It Factory Website</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link">Lowongan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produk/show">Produk</a>
                    </li>
                    <!--
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" th:href="@{/address}">Address</a>
                            <a class="dropdown-item" th:href="@{/basic}">Basic</a>
                            <a class="dropdown-item" th:href="@{/contact}">Contact</a>
                            <a class="dropdown-item" th:href="@{/currentoccupation}">Current Occupation</a>
                            <a class="dropdown-item" th:href="@{/education}">Education</a>
                        </div>
                    </li>
                    -->
                </ul>
            </div>
        </nav>

        <br><br><br>
    <div class="container ml-4">
    <h1>Insert Lowongan</h1><br>
    <form method="post" action="/lowongan/save" class="needs-validation" novalidate>
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="inputKode" class="col-sm-2 col-form-label">Kode Lowongan</label>
            <div class="col-sm-3">
                <input type="text" name="kode" class="form-control" id="inputKode" placeholder="Kode" required>
                <div class="invalid-feedback">Please enter Id field</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPosisi" class="col-sm-2 col-form-label">Posisi</label>
            <div class="col-sm-3">
                <input type="text" name="posisi" class="form-control" id="inputPosisi" placeholder="Posisi" required>
                <div class="invalid-feedback">Please enter Id field</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputJumlah" class="col-sm-2 col-form-label">Jumlah Lowongan</label>
            <div class="col-sm-3">
                <input type="number" name="jumlah" class="form-control" id="inputJumlah" placeholder="Jumlah Lowongan" required>
                <div class="invalid-feedback">Please enter Id field</div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-xs-1">
                <button type="submit" class="btn btn-primary">Insert</button>
            </div>
        </div>
    </form>
    </div>
</body>
</html>