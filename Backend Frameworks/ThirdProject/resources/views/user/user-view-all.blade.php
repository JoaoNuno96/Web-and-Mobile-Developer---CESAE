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
                <tr>
                    <td scope="row">{{$user->name}}

                    </td>

                    <td scope="row">{{$user->email}}

                    </td>
                    <td scope="row">{{$user->senha}}

                    </td>
                  </tr>


            @endforeach
        </tbody>
      </table>

</div>
@endsection
