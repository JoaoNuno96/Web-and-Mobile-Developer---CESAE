@extends('layout.fmaster')

@section('content')

<div>

    <h1 class="text-white text-center">DashBoard</h1>

    <p class="text-light text-center">User {{Auth::user()->id}}#{{Auth::user()->name}}</p>
    <div class="text-center">
        <img width="400px" height="400px" src="{{asset("storage/users/no.png")}}" alt="photo" />
    </div>
    <p class="text-light text-center"><strong>Name:  </strong>{{Auth::user()->name}}</p>
    <p class="text-light text-center"><strong>Email:  </strong>{{Auth::user()->email}}</p>

    @auth
        <div class="col-12 text-center">
            <a href="" class="btn btn-primary">Edit</a>
        </div>
    @endauth




</div>

@endsection
