<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UGD4_D_11212 Halaman Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        img{
            height: 785px;
            width: 1550px;
        }
        .navbar{
            margin-top: -25px;
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

    <div id="myCarousel" class="carousel slide mb-6 pointer-event" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                class=""></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="{{ asset('images/danau.jpg') }}" alt="">
                <div class="container">
                    <div class="carousel-caption text-center bg-color">
                        <h1>Danau</h1>
                        <p>Modul 4 - Laravel MVC</p>

                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="{{ asset('images/gunung.jpg') }}" alt="">
                <div class="container">
                    <div class="carousel-caption text-center bg-color">
                        <h1>Gunung</h1>
                        <p>Modul 4 - Laravel MVC</p>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/pantai.jpg') }}" alt="">
                <div class="container">
                    <div class="carousel-caption text-center bg-color">
                        <h1>Pantai</h1>
                        <p>Modul 4 - Laravel MVC</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>