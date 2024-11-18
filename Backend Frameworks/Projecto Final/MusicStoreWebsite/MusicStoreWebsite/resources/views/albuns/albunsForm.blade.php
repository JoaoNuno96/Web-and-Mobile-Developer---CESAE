@extends('layout.fmaster')

@section('content')

<div>

    <h1 class="text-white text-center">Albuns</h1>

    <form action="{{route("album.add")}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 text-white mx-5">
          <label for="exampleInputEmail1" class="form-label">Band</label>
          {{-- <input type="text" name="name" class="form-control" id="exampleInputEmail1"> --}}
          <select name="band">

            @foreach ($bands as $band)

                <option value="{{$band->id}}">{{$band->name}}</option>

            @endforeach

          </select>

        </div>

        <div class="mb-3 text-white mx-5">
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input type="text" name="albumName" class="form-control" id="exampleInputPassword1">

            @error('albumName')
                  <p style="color: red"> Album Name not valid!</p>
              @enderror

          </div>

        <div class="mb-3 text-white mx-5">
          <label for="exampleInputPassword1" class="form-label">Original Date</label>
          <input type="text" name="OGdate" class="form-control" id="exampleInputPassword1">

          @error('OGdate')
                <p style="color: red"> Original Date not valid!</p>
            @enderror

        </div>

          <div class="mb-3 text-white mx-5">
            <label for="exampleInputEmail1" class="form-label">Images</label>
            <input type="file" accept="image/*" name="photo" class="form-control" id="exampleInputEmail1">

            @error('photo')
                <p style="color: red"> Photo not valid!</p>
            @enderror

          </div>

            <button type="submit" class="btn btn-primary text-center mx-5">Add Band</button>

      </form>

</div>

@endsection
