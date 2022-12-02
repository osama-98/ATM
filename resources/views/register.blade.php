<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
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
    <div class="login-page">
        <div class="form">
            <form class="register-form">
                <input type="text" placeholder="name" name="name" id="name" />
                <input type="text" placeholder="username" name="username" id="username" />
                <input type="password" placeholder="password" name="password" id="password" />
                <input type="password" placeholder="confirm password" name="current_password" id="current_password" />
                <button>create</button>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
            </form>

        </div>
    </div>

</body>

</html>
