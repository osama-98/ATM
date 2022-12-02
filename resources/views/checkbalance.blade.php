<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link href="{{ asset('css/checkbalance.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<div class="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('landing') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
              </li>

              {{-- <li class="nav-item">
                <a class="nav-link" href="#featured">Featured</a>
              </li> --}}
            </ul>

          </div>
        </div>
      </nav>
</div>
<body>
    <div class="container d-flex justify-content-center">
        <div class="card p-3">

          <p class="text-white">Your Balance</p>

          <div class="card-bottom pt-3 px-3 mb-2">
            <div class="d-flex flex-row justify-content-between text-align-center">
              <div class="d-flex flex-column"><p> <span class="text-secondary">88,989</span>JD</p></div>

            </div>
          </div>
        </div>
      </div>

</body>

</html>
