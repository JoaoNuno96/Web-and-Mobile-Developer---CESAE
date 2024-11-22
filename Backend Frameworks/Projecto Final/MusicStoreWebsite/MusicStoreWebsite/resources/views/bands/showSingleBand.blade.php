@extends('layout.fmaster')

@section('content')

<div>

    <h1 class="text-white text-center">Band</h1>

    <p class="text-light text-center">ID #{{$band->id}} {{$band->name}}</p>
    <div class="text-center">
        <img width="400px" height="400px" src="{{asset("storage/" . $band->path)}}" alt="photo" />
    </div>
    <p class="text-light text-center">GENRE: {{$band->genre}}</p>
    <p class="text-light text-center">MEMBERS: {{$band->members}}</p>

    @auth
        <div class="col-12 text-center">
            <a href="{{route("band.form.change",$band->id)}}" class="btn btn-primary">Edit</a>
        </div>
    @endauth

    <hr class="text-light" />
    <h2 class="text-light text-center">Current Albuns</h2>
    <div class="row">
    @foreach ($albunsImages as $albumImage)
        <div class="col-4 text-center">
            <a href="{{route("album.singleshow", $albumImage->id)}}" class="btn btn-primary" >
                <img src="{{asset("storage/" . $albumImage->image_source)}}" alt="" height="200px" />
            </a>
        </div>

    @endforeach
    </div>




</div>

@endsection
