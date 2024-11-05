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

@endsection

