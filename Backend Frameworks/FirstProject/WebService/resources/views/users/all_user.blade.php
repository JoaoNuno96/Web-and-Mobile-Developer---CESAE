@extends('layout.femaster')

@section('content')
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
@endsection
