@extends('_layout');



@section('content')

<div class="container text-center">
    <div class="row">
        <div className="col">
            <div className="jumbotron">
              <h1 className="display-4 text-white">Lista de Utilizadores</h1>
              <p className="lead text-white">Está é a lista de utilizadores</p>
              <hr id="lineOne" className="my-4" />
              <p className="text-white">Para mais informações, não hesite em questionar.</p>
              <p className="lead mt-4">
                <a className="btn btn-outline-light" href="/" role="button">Voltar</a>
              </p>
            </div>
        </div>
    </div>

    <table class="table text-center">
        <thead>
          <tr>
                @foreach ($indices as $indice)
                    <th scope="col">{{$indice}}</th>
                @endforeach
          </tr>
        </thead>
        <tbody>
            @foreach ($listaUtilizadores as $user)
                <tr id="{{$user->name}}">

                    <td>
                        {{$user->name}}
                    </td>

                    <td>
                        {{$user->email}}
                    </td>

                    <td>
                        {{$user->senha}}
                    </td>

                    <td>
                        <a class="btn btn-outline-danger" href="{{ route('user.rem', $user->id) }}">Eliminar</a>
                        <a class="btn btn-outline-warning" href="{{ route('user.editSpecs', $user->id) }}">Editar</a>
                    </td>

                  </tr>
            @endforeach
        </tbody>
      </table>

</div>
@endsection
