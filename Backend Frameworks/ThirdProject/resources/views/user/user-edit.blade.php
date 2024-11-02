@extends('_layout')

@section('content')

<div class="container text-center">
    <div class="row">
        <div className="col">
            <div className="jumbotron">
              <h1 className="display-4 text-warning">Editar Utilizador</h1>
              <p className="lead text-warning">Escolha o que pretende alterar</p>
              <hr id="lineOne" className="my-4" />

              <form action="/user/edit/" method="post">
                @csrf
                @method('post')

                <input type="hidden" name="id" value={{$user[0]->id}} />

                <input type="text" name="name" placeholder="Digite Novo Nome" />
                <p>Nome: {{$user[0]->name}} </p>
                <hr id="lineOne" className="my-4" />

                <input type="text" name="email" placeholder="Digite Novo Email" />
                <p>Email: {{$user[0]->email}} </p>
                <hr id="lineOne" className="my-4" />

                <input type="text" name="password" placeholder="Digite Nova Senha" />
                <p>Senha: {{$user[0]->senha}} </p>
                <hr id="lineOne" className="my-4" />

                <button class="btn btn-warning" type="submit">Alterar</button>
              </form>

            </div>
          </div>
    </div>
</div>
@endsection
