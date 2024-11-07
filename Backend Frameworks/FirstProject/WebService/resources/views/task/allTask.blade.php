@extends('layout.femaster')
@section('content')

@if(session('task_message'))

        <script>
            var div = document.createElement("div");
            div.id = "updatePop"
            div.className = "alert alert-success";
            div.role = "alert";
            div.innerHTML = '{{session("task_message")}}';

            this.document.getElementById("errors").append(div);

            setTimeout(() => {
                this.document.getElementById("updatePop").remove();
            }, 1500);
        </script>

@endif

@if(session('task_removido'))

        <script>
            var div = document.createElement("div");
            div.id = "updatePop"
            div.className = "alert alert-danger";
            div.role = "alert";
            div.innerHTML = '{{session("task_removido")}}';

            this.document.getElementById("errors").append(div);

            setTimeout(() => {
                this.document.getElementById("updatePop").remove();
            }, 1500);
        </script>

@endif

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

            <td>
                <a href="{{route("task.view.item",[$task->id,$task->userName])}}" class="btn btn-success" >Ver</a>
                <a href="{{route("task.remove",$task->id)}}" class="btn btn-danger">Remover</a>
            </td>
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

