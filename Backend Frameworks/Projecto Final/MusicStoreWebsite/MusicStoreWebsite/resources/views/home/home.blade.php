@extends('layout.fmaster')

@section('content')

{{-- <div class="carrosel">

</div> --}}


<div id="carouselExample" class="carrosel carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset("assets/images/homeimages.jpg")}}" class="d-block vw-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  {{-- JUMBOTRON --}}
  <div class="jumbotron jumbo absoul text-light">
    <h1 class="display-4">Welcome Listener!</h1>
    <p class="lead">If you want to heard the fastest and collest songs in one website, go right in</p>
    <hr class="my-4">
    <p>Please, select the option you desire.</p>
    <a href="{{route("album.all")}}" class=" btn btn-outline-light">
        Albuns
    </a>
      <a href="{{route("band.all")}}" class=" btn btn-outline-light">
        Artists
      </a>
  </div>




{{-- <div class="row">
    <div class="col">
        <img class="w-75" src="{{asset("assets/images/homeimages.jpg")}}" alt=""  />
    </div>
</div> --}}

@endsection
