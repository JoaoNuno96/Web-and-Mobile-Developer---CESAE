@extends('layout.femaster')
@section('content')

<h4 class="text-center"></h4>

<h4 class="text-center">Task#{{$task->id}}</h4>
<p><strong>Tarefa:</strong> {{$task->name}}</p>
<p><strong>Descrição:</strong> {{$task->description}}</p>

<form action="{{route("task.add")}}" method="POST">

    @csrf

    <div class="form-group">
      <label for="exampleInputEmail1">Tarefa</label>
      <input value="{{$task->name}}" name="tarefa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adicionar Tarefa">
    </div>

    @error('tarefa')
        <p style="color: red"> Tarefa inválido!</p>
    @enderror

    <br />
    <div class="form-group">
      <label for="exampleInputPassword1">Descricao</label>
      <input value="{{$task->description}}" name="descricao" type="text" class="form-control" id="exampleInputPassword1" placeholder="Adicionar Descrição">
    </div>

    @error("descricao")
        <p style="color: red"> Descricao inválido!</p>
    @enderror

    <br />

    <label for="utilizadores">Utilizadores</label>
    <select name="user" id="utilizadores" class="form-select" aria-label="Default select example">
        @foreach ( $users as $user )

            <option value="{{$user->id}}" {{($task->user_fk == $user->id) ? "selected" : ""}}>{{$user->name}}</option>

        @endforeach
    </select>



    <button type="submit" class="btn btn-primary">Atualizar</button>
  </form>

@endsection

