@extends('layout.femaster')
@section('content')

<h4 class="text-center"></h4>

<h4 class="text-center">Task#{{$task->id}}</h4>
<p><strong>Tarefa:</strong> {{$task->name}}</p>
<p><strong>Descrição:</strong> {{$task->description}}</p>
<p><strong>Utilizador:</strong> {{$userName}}</p>


@endsection

