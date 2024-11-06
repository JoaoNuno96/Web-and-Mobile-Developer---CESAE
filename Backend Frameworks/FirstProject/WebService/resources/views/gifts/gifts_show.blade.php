@extends('layout.femaster')
@section('content')

<p class="text-center">LISTA PRENDAS</p>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Valor Previsto</th>
        <th scope="col">Valor Gasto</th>
        <th scope="col">Utilizador</th>
        <th scope="col">Diferença</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($gifts as $gift)
        <tr>
            <td>{{$gift->id}}</td>
            <td>{{$gift->name}}</td>
            <td>{{$gift->valuePreview}}</td>
            <td>{{$gift->valueSpend}}</td>
            <td>{{$gift->userName}}</td>
            <td>{{$gift->valueSpend < $gift->valuePreview ? "Tu poupaste " : "Tu não poupaste "}}</td>
            <td><a href="{{route('gifts.show.gift', $gift->id)}}" type="button" class="btn btn-success">Ver</a></td>
            <td><a href="{{route('gifts.remove', $gift->id)}}" type="button" class="btn btn-danger">Remover</a></td>

          </tr>
        @endforeach

    </tbody>
  </table>
  <a type="button" href="{{route("gifs.form")}}" class="btn btn-outline-success">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"></path>
    </svg>
        Novo Registo
</a>

@endsection

