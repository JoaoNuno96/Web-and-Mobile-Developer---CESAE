@extends('_layout');

@section('content')

<div class="container text-center">
    <div class="row">
        <div class="col">
            <div class="jumbotron">
              <h1 class="display-4 text-warning">Os dados foram alterados!</h1>
              <p class ="lead text-warning">Seu registo foi alterado!</p>
              <a class="btn btn-warning" href="{{route('user.showList')}}">Voltar</a>
              <hr id="lineOne" className="my-4" />
            </div>
          </div>
    </div>
</div>
@endsection
