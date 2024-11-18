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
            <th scope="col">BAND</th>
            <th scope="col">YEAR</th>
            <th scope="col">ACTIONS</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($albuns as $album)
            <tr>
                <td>{{$album->id}}</td>
                <td><img width="100px" height="100px" src="{{asset("storage/" . $album->image_source)}}" alt="photo" /></td>
                <td>{{$album->name}}</td>
                <td>{{$album->bandName}}</td>
                <td>{{$album->date}}</td>

                <td>
                    <a href="{{route("album.singleshow", $album->id)}}" class="btn btn-success" >Ver</a>
                    <a href="{{route("album.remove", $album->id)}}" class="btn btn-danger">Remover</a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>

</div>

@endsection
