@extends('_layout');

@section('content')

<div class="container text-center">
    <div class="row">
        <div class="col">
            <div class="jumbotron">
              <h1 class="display-4 text-success">Sucesso!</h1>
              <p class ="lead text-success">Utilizador criado com sucesso!</p>
              <a class="btn btn-success" href="{{route('user.showList')}}">Voltar</a>
              <hr id="lineOne" className="my-4" />
            </div>
          </div>
    </div>

</div>
@endsection
