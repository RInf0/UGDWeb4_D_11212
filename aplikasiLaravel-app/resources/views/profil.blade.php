<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UGD4_D_11212 Halaman Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .navbar{
            margin-top: -25px;
        }
        .card{
            margin-left: 160px;
            margin-top: 70px;
        }
        img{
            margin-top: 15px;
            margin-left: 20px;
            border-radius: 50%;
        }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">>
        <div class="container-fluid">
            <a class="navbar-brand">UGD4_D_11212</a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-label="Toggle navigation" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>   
            <div class="navbar-collapse collapse" id="navbarsExample01">
                <ul class="navbar-nav me-auto mb-2">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('profil') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('form') }}">Form</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>
    <br>
    <div class="card mb-3" style="max-width: 1200px;">
        <div class="row g-1">
            <div class="col-md-5">
                <img src="{{ asset('images/shadow.jpeg') }}" class="img-fluid" alt="shadow">
            </div>

            <div class="col-md-5">
                <div class="card-body">
                    <h5 class="card-title">REYHAN</h5>
                    <p class="card-text">Seorang mahasiswa informatika UAJY</p>
                    <br>
                    <p class="card-text"><strong>Alamat: </strong>Jl.Rumah-rumahan no. 1</p>
                    <p class="card-text"><strong>Email: </strong>email@gmail.com</p>
                    <p class="card-text"><strong>Telepon: </strong>08123456789</p>
                    <p class="card-text"><strong>Hobi: </strong>makan</p>
                    <a href="{{ url('form') }}" class="btn btn-primary">Form Data Mahasiswa</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>