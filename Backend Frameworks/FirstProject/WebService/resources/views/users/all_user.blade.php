@extends('layout.femaster')

@section('content')



@if(session('Message'))

        <div class="alert alert-success" role="alert">
            {{ session("Message" )}}
        </div>
        {{-- @script message({{ session("Message" )}}); --}}

@endif

    <h6>Info do Cesae</h6>
    <ul>
        <li>{{ $cesaeInfo['name'] }}</li>
        <li>{{ $cesaeInfo['address'] }}</li>
        <li>{{ $cesaeInfo['email'] }}</li>
    </ul>
    <h3>Sou uma blade para todos os users </h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">NIF</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>

                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->nif }}</td>
                    <td><a href="{{route('users.show', $user->id)}}" type="button" class="btn btn-success">Ver</a></td>
                    <td><a href="{{route('users.delete', $user->id)}}" type="button" class="btn btn-danger">Remover</a></td>
                </tr>


            @endforeach


        </tbody>
    </table>

    <a type="button" href="{{route("users.form")}}" class="btn btn-outline-success">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"></path>
        </svg>
            Novo Registo
    </a>


@endsection
