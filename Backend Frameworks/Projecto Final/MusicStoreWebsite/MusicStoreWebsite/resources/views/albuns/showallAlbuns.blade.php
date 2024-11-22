@extends('layout.fmaster')

@section('content')

@if(session('addMessage'))
    <p class="quadrado text-white text-center">{{session('addMessage')}}</p>
@endif

@if(session('removeMessage'))
    <p class="quadrado text-white text-center">{{session('removeMessage')}}</p>
@endif

@if(session('updateMessage'))
    <p class="quadrado text-white text-center">{{session('updateMessage')}}</p>
@endif


<div class="bg-dark">

    <br />

    <form method="GET">
        <select class="form-select form-select mb-3" aria-label=".form-select-lg example" name="bandId" onchange="this.form.submit()">
            <option selected value="">Select an Artist</option>
            @foreach ($bands as $band)

                <option
                    @if($band->id == request()->query("bandId"))
                    selected
                    @endif
                    value="{{$band->id}}">
                    {{$band->name}}
                </option>

            @endforeach
        </select>
    </form>

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
                {{-- {{dd($albuns)}} --}}
                <td>{{$album->id}}</td>
                <td><img width="100px" height="100px" src="{{asset("storage/" . $album->image_source)}}" alt="photo" /></td>
                <td>{{$album->name}}</td>
                <td>{{$album->bandName}}</td>
                <td>{{$album->date}}</td>

                <td>
                    <a href="{{route("album.singleshow", $album->id)}}" class="btn btn-info" >Show</a>

                    @auth
                        @if(Auth::user()->user_type == 2)

                            <a href="{{route("album.remove", $album->id)}}" class="btn btn-danger">Remove</a>

                        @endif
                    @endauth
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>

      <div class="d-flex justify-content-center">
        {{$albuns->links("")}}
      </div>

</div>

@endsection
