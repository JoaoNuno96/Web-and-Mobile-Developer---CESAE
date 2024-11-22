@extends('layout.fmaster')

@section('content')

<div>
    <h1 class="text-white text-center">Update Band</h1>

    <form action="{{route("band.update")}}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="identificadorBanda" value="{{$band->id}}" />

        <div class="mb-3 text-white mx-5">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" name="name" value={{$band->name}} class="form-control" id="exampleInputEmail1">

          @error('name')
                <p style="color: red"> Name not valid!</p>
            @enderror

        </div>

        <div class="mb-3 text-white mx-5">
          <label for="exampleInputPassword1" class="form-label">Original Date</label>
          <input type="text" name="OGdate" value={{$band->birthDate}} class="form-control" id="exampleInputPassword1">

          @error('OGdate')
                <p style="color: red"> Original Date not valid!</p>
            @enderror

        </div>

        <div class="mb-3 text-white mx-5">
            <label for="exampleInputEmail1" class="form-label">Genre</label>
            <input type="text" value={{$band->genre}} name="genre" class="form-control" id="exampleInputEmail1">

            @error('genre')
                <p style="color: red"> Genre not valid!</p>
            @enderror

        </div>

          <div class="mb-3 text-white mx-5">
            <label for="exampleInputEmail1" class="form-label">Members</label>
            <input type="text" value={{$band->members}} name="members" class="form-control" id="exampleInputEmail1">
            <div id="emailHelp" class="form-text text-white">Write members name, divided with ","</div>

            @error('members')
                <p style="color: red"> Members not valid!</p>
            @enderror

          </div>

          <div class="mb-3 text-white mx-5">
            <label for="exampleInputEmail1" class="form-label">Images</label>
            <input type="file" accept="image/*" value={{$band->path}} name="photo" class="form-control" id="exampleInputEmail1">
            <div id="emailHelp" class="form-text text-white">This field cannot be left empty</div>
            @error('photo')
                <p style="color: red"> Photo not valid!</p>
            @enderror

          </div>

            <button type="submit" class="btn btn-primary text-center mx-5">Update</button>

      </form>

</div>

@endsection
