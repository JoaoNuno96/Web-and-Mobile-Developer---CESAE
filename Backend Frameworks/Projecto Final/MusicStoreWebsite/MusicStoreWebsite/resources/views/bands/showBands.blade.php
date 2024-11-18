@extends('layout.fmaster')

@section('content')

@if(session('addMessage'))
    <p class="text-white text-center">{{session('addMessage')}}</p>
@endif

@if(session('removeMessage'))
    <p class="text-white text-center">{{session('removeMessage')}}</p>
@endif

<div class="bg-dark">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">IMAGE</th>
            <th scope="col">NAME</th>
            <th scope="col">GENRE</th>
            <th scope="col">MEMBERS</th>
            <th scope="col">ACTIONS</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($bands as $band)
            <tr>
                <td>{{$band->id}}</td>
                {{-- {{dd($band->path)}} --}}
                <td><img width="100px" height="100px" src="{{asset("storage/" . $band->path)}}" alt="photo" /></td>
                <td>{{$band->name}}</td>
                <td>{{$band->genre}}</td>
                <td>
                    {{$band->members}}
                </td>

                <td>
                    <a href="{{route("band.singleshow", $band->id)}}" class="btn btn-success" >Ver</a>
                    <a href="{{route("band.remove", $band->id)}}" class="btn btn-danger">Remover</a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>

</div>

@endsection
