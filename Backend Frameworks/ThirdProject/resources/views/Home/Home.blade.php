@extends('_layout')

@section('content')

<div class="container text-center ">
    <div class="row">
        <div className="col">
            <div className="jumbotron">
              <h1 className="display-4 text-white">Home</h1>
              <p className="lead text-white">Esta é a nossa Home-Page</p>
              <hr id="lineOne" className="my-4" />
              <p className="text-white">Para mais informações, não hesite em questionar.</p>
              <p className="lead mt-4">
                <a className="btn btn-outline-light" href="/" role="button">Voltar</a>
              </p>
            </div>
          </div>
    </div>
</div>
@endsection
