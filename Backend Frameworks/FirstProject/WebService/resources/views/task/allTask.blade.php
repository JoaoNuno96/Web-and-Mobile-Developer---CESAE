@extends('layout.femaster')
@section('content')

<h4 class="text-center">Table os Task</h4>

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

  <a type="button" href="{{route("task.form")}}" class="btn btn-outline-success">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"></path>
    </svg>
        Novo Registo
</a>

@endsection

