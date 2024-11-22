@extends('layout.fmaster')

@section('content')

<div>

    <h1 class="text-white text-center">Album Update</h1>

    <form action="{{route("album.update")}}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="identificadorUnidoDeAlbum" value={{$album->id}} />

        <div class="mb-3 text-white mx-5">
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input type="text" name="albumName" value={{$album->name}} class="form-control" id="exampleInputPassword1">

            @error('albumName')
                  <p style="color: red"> Album Name not valid!</p>
              @enderror

          </div>

        <div class="mb-3 text-white mx-5">
          <label for="exampleInputPassword1" class="form-label">Original Date</label>
          <input type="text" name="OGdate" value={{$album->date}} class="form-control" id="exampleInputPassword1">

          @error('OGdate')
                <p style="color: red"> Original Date not valid!</p>
            @enderror

        </div>

          <div class="mb-3 text-white mx-5">
            <label for="exampleInputEmail1" class="form-label">Images</label>
            <input type="file" accept="image/*" value={{$album->image_source}} name="photo" class="form-control" id="exampleInputEmail1">
            <div id="emailHelp" class="form-text text-white">This field cannot be left empty</div>

            @error('photo')
                <p style="color: red"> Photo not valid!</p>
            @enderror

          </div>

            <button type="submit" class="btn btn-primary text-center mx-5">Add Band</button>

      </form>

</div>

@endsection
