@extends('layout.femaster')
@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">DESCRIPTION</th>
        <th scope="col">USER</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
        <tr>
            <td>{{$task->id}}</td>
            <td>{{$task->name}}</td>
            <td>{{$task->description}}</td>
            <td>{{$task->userName}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection

