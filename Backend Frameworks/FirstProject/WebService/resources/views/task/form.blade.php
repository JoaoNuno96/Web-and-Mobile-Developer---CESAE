@extends('layout.femaster')
@section('content')

@if(session('task_message'))

        <div class="alert alert-success" role="alert">
            {{ session("task_message" )}}
        </div>
        {{-- @script message({{ session("Message" )}}); --}}

@endif


  <form action="{{route("task.add")}}" method="POST">

    @csrf

    <div class="form-group">
      <label for="exampleInputEmail1">Tarefa</label>
      <input name="tarefa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adicionar Tarefa">
    </div>

    @error('tarefa')
        <p style="color: red"> Tarefa inválido!</p>
    @enderror

    <br />
    <div class="form-group">
      <label for="exampleInputPassword1">Descricao</label>
      <input name="descricao" type="text" class="form-control" id="exampleInputPassword1" placeholder="Adicionar Descriçõa">
    </div>

    @error("descricao")
        <p style="color: red"> Descricao inválido!</p>
    @enderror

    <br />

    <label for="utilizadores">Utilizadores</label>
    <select name="user" id="utilizadores" class="form-select" aria-label="Default select example">
        @foreach ( $users as $user )

            <option value="{{$user->id}}">{{$user->name}}</option>

        @endforeach
    </select>



    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection


