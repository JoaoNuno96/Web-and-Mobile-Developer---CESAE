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

</div>

@endsection
