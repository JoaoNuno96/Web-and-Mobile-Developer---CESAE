@extends('layout.fmaster')

@section('content')

<div class="row">
    @if(session('addMessage'))
    <p class="quadrado text-white text-center">{{session('addMessage')}}</p>
    @endif

    @if(session('removeMessage'))
        <p class="quadrado text-white text-center">{{session('removeMessage')}}</p>
    @endif

    @if(session('updateMessage'))
        <p class="quadrado text-white text-center">{{session('updateMessage')}}</p>
    @endif
</div>


<div class="bg-dark">

    <form method="GET" class="d-flex mx-5">
        <input class="form-control me-2" type="search" placeholder="Search" value="{{request()->query("procura")}}" name="procura" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>

      <br />

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">IMAGE</th>
            <th scope="col">NAME</th>
            <th scope="col">GENRE</th>
            <th scope="col">MEMBERS</th>
            <th scope="col">ALBUNS COUNT</th>
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
                <td>{{$band->members}}</td>
                <td>
                    {{$band->albuns_count}}
                </td>

                <td>
                    <a href="{{route("band.singleshow", $band->id)}}" class="btn btn-primary" >Show</a>
                    @auth
                        @if(Auth::user()->user_type == 2)

                            <a href="{{route("band.remove", $band->id)}}" class="btn btn-danger">Remove</a>

                        @endif
                    @endauth
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>

      <div class="d-flex justify-content-center">
        {{$bands->links("")}}
      </div>

</div>

@endsection
