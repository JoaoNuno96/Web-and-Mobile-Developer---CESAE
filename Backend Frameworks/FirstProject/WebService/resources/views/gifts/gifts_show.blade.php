@extends('layout.femaster')
@section('content')

<p class="text-center">PRENDAS</p>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Valor Previsto</th>
        <th scope="col">Valor Gasto</th>
        <th scope="col">Utilizador</th>
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
            {{-- <td><a href="{{route('users.show', $user->id)}}" type="button" class="btn btn-success">Ver</a></td>
            <td><a href="{{route('users.delete', $user->id)}}" type="button" class="btn btn-danger">Remover</a></td> --}}

          </tr>
        @endforeach

    </tbody>
  </table>

@endsection

