<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Music Store Web</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="bg-dark">

    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="text-light navbar-brand" href="{{route("home")}}">Music Store Web</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              {{-- ARTIST --}}

              <div class="btn-group">
                <a type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Artist
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route("band.form")}}">Add Artist</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="{{route("band.all")}}">Show All Artist</a></li>
                </ul>
              </div>


              {{-- ALBUNS --}}

              <div class="btn-group">
                <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Albuns
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route("album.form")}}">Add Albuns</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="{{route("album.all")}}">Show All Albuns</a></li>
                </ul>
              </div>

            </ul>
            <span class="text-light navbar-text">
                <button class=" btn btn-outline-light">
                    Log in
                  </button>
                  <button class=" btn btn-outline-light">
                    Sign in
                  </button>
            </span>
          </div>
        </div>
      </nav>
    <div>
        @yield("content")
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
