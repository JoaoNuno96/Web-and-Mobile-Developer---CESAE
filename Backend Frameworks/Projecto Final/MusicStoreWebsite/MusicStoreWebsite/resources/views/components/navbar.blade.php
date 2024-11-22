<div>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="text-light navbar-brand" href="{{route("home")}}">Music Store Web</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              {{-- ARTIST --}}


                @auth
                    @if(Auth::user()->user_type == 2)

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
                    @else
                        <div class="btn-group">
                            <a type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Artist
                            </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route("band.all")}}">Show All Artist</a></li>
                                </ul>
                            </div>

                    @endif

                @endauth

                @guest
                    <a class="btn btn-outline-light" href="{{route("band.all")}}">Artist</a>
                @endguest

              {{-- ALBUNS --}}

              @auth
                @if(Auth::user()->user_type == 2)

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

                @else

                    <div class="btn-group">
                        <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Albuns
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route("album.all")}}">Show All Albuns</a></li>
                        </ul>
                    </div>

                @endif

              @endauth

              @guest
                <a class="btn btn-outline-light" href="{{route("album.all")}}">Albuns</a>
              @endguest

            </ul>

            @auth
                <a href="{{route("dash")}}" class="btn btn-outline-light">Dashboard</a>
            @endauth

            <span class="navbar-text">
                    @auth
                        <span class="navbar-text">
                            <form method="POST" action="{{route("logout")}}">
                                @csrf
                                <button class="btn btn-outline-light">Log off</button>
                            </form>
                        </span>
                        <span>

                        </span>
                    @endauth
                    @guest
                        <a href="{{route("login.form")}}" class="btn btn-outline-light text-light ">
                            Log in
                        </a>
                        <a href="{{route("sign.form")}}" class=" btn btn-outline-light text-light ">
                            Sign in
                        </a>
                    @endguest

            </span>
          </div>
        </div>
      </nav>

</div>
