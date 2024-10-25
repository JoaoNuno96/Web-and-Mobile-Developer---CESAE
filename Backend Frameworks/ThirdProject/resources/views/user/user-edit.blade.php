@extends('_layout')

@section('content')

<div class="container text-center">
    <div class="row">
        <div className="col">
            <div className="jumbotron">
              <h1 className="display-4 text-warning">Editar Utilizador</h1>
              <p className="lead text-warning">Escolha o que pretende alterar</p>
              <hr id="lineOne" className="my-4" />

              <form action='/user/add/sucess' method="POST">
                @csrf
                @method('post')

                <input type="text" placeholder="Digite Novo Nome" />
                <p>Nome: {{$user[0]->name}} </p>
                <hr id="lineOne" className="my-4" />

                <input type="text" placeholder="Digite Novo Email" />
                <p>Email: {{$user[0]->email}} </p>
                <hr id="lineOne" className="my-4" />

                <input type="text" placeholder="Digite Nova Senha" />
                <p>Senha: {{$user[0]->senha}} </p>
                <hr id="lineOne" className="my-4" />

              </form>

              <p className="lead mt-4">
                <a className="btn btn-outline-warning" href="/" role="button">Registar Alterações</a>
              </p>
            </div>
          </div>
    </div>
</div>
@endsection
