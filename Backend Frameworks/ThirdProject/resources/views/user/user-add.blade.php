@extends('_layout');

@section('content')

<div class="container text-center">
    <div class="row">
        <div className="col">
            <div className="jumbotron">
              <h1 className="display-4 text-white">Adicionar Utilizadores</h1>
              <p className="lead text-white">Nesta página poderá adicionar utilizadores</p>
              <hr id="lineOne" className="my-4" />
            </div>
          </div>
    </div>

    <form action='/user/add/sucess' method="POST">
        @csrf
        @method('post')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Utilizador Novo</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Digite Utilizador" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Digite Email" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" id="exampleInputEmail1" placeholder="Digite Senha" aria-describedby="emailHelp">
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
