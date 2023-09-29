<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UGD4_D_11212 Halaman Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .navbar{
            margin-top: -25px;
        }
        .header{
            background-color: blue;
            color: white;
            width: 600px;
            height: 40px;
            border-radius: 5px 5px 0px 0px;
            margin-left: -12px;
        }
        form{
            margin-left: 150px;
            margin-top: 150px;
        }
        .form-group{
            margin-bottom: 10px;
        }
        .container{
            width: 600px;
            height: 320px;
        }
        .col-sm-10{
            border: 1px solid;
            border-radius: 5px 5px 5px 5px;
            width: 470px;
            margin-top: 5px;
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

    <form>
        <div class="d-flex justify-content-center">
            <div class="container border rounded ">
                <div class="header">
                    <h7>Form Data Mahasiswa</h7>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Reyhan">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">NPM</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="210711212">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Fakultas</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Fakultas Teknologi Informasi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Jurusan</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Teknologi Informasi">
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>