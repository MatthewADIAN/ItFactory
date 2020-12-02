<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>It Factory</title>
    <style>
            img{
                opacity: 0.4;
            }
            .h1{
                text-shadow: 2px 2px 8px black;
            }
            .description{
                position: absolute;
                top: 30%;
                margin: auto;
                padding: 2em;

            }
            .description h1{
                color:black ;
            }
            .description p{
                color:#666;
                font-size: 20px;
                width: 50%;
                line-height: 1.5;
            }
            #buttonLogin{
                border:1px  solid #f3eee7;
                background:#f3eee7;
                color:black;
            }
        </style>
</head>
<body style="background-color: grey">
<img class="card-img-top" src ="https://cdn.pixabay.com/photo/2016/11/19/14/00/code-1839406_960_720.jpg" alt="Images" height="720px">
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
                        <a class="nav-link">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/lowongan/show">Lowongan</a>
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
    
        <div class="container">
            <div class="description">
                <h1 style="color: red">
                   <div class="h1">Selamat Datang di Website It Factory</div>
                    <p style="color: white" class="h1">Website untuk jual beli Jasa IT
                    </p>   
                    <a class="btn btn-secondary btn-lg" th:href="@{/login}" role="button" id="buttonLogin">LOGIN</a>   
                </h1>  
            </div>

        </div>


    <footer class="fixed-bottom text-center" style="background-color: white"> 
        @Copyright Matthew Adian, Agustinus Yoga, Matius
    </footer>

</body>
</html>