@extends('layout.femaster')
@section('content')

<form action="{{route("gifs.form.add")}}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nome</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nome prenda" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Valor Previsto</label>
        <input type="text" name="valorPrevisto" class="form-control" id="exampleInputEmail1" placeholder="Valor Prevista" aria-describedby="emailHelp">
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Valor Gasto</label>
        <input type="text" name="valorGasto" class="form-control" id="exampleInputEmail1" placeholder="Valor Gasto" aria-describedby="emailHelp">
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Utilizador</label>
        <select name="user" id="utilizadores" class="form-select" aria-label="Default select example">
            @foreach ( $users as $user )

                <option value="{{$user->id}}">{{$user->name}}</option>

            @endforeach
        </select>

      </div>

    <button type="submit" class="btn btn-primary">Registar</button>

  </form>

  @endsection
