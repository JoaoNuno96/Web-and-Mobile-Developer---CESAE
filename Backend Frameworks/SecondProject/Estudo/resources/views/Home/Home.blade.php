@extends('_layout');

@section('content')

<h1>Home Page</h1>

<ul>
    <li><a href="{{route("home")}}">Home</a></li>
    <li><a href="{{route("welcome")}}">Welcome</a></li>
    <li><a href="{{route("contact")}}">Contactos</a></li>
</ul>

@endsection
