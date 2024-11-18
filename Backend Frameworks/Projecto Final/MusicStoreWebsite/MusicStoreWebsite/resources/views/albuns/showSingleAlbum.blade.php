@extends('layout.fmaster')

@section('content')

<div>

    <h1 class="text-white text-center">Album</h1>

    <p class="text-light text-center">ALBUM ID #{{$album->id}} {{$album->name}}</p>
    <div class="text-center">
        <img width="400px" height="400px" src="{{asset("storage/" . $album->image_source)}}" alt="photo" />
    </div>
    <p class="text-light text-center">BAND: {{$album->bandName}}</p>
    <p class="text-light text-center">DATE: {{$album->date}}</p>

</div>

@endsection
