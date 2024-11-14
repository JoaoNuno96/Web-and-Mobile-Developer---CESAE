<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Music Store Web</title>
    <link rel="stylesheet" href="bootstrap/bcss.css">
    <script src="bootstrap/bscript.js" defer></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="text-light navbar-brand" href="#">Music Store Web</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="text-light nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="text-light nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="text-light nav-link" href="#">Pricing</a>
              </li>
            </ul>
            <span class="text-light navbar-text">
              Navbar text with an inline element
            </span>
          </div>
        </div>
      </nav>

    <div class="container">
        @yield("content")
      </div>


</body>
</html>
