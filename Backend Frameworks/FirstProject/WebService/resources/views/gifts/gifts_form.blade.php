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
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Valor Prevista" aria-describedby="emailHelp">
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Valor Gasto</label>
        <input type="password" name="senha" class="form-control" id="exampleInputEmail1" placeholder="Valor Gasto" aria-describedby="emailHelp">
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Utilizador</label>
        <input type="password" name="senha" class="form-control" id="exampleInputEmail1" placeholder="Utilizador" aria-describedby="emailHelp">
      </div>

    <button type="submit" class="btn btn-primary">Registar</button>

  </form>

  @endsection
