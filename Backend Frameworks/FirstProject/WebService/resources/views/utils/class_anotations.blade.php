@extends('layout.femaster')
@section('content')

<h5>Olá eu sou a nossa casa!</h5>
<p>{{ $greetings }}</p>
   <ul>
       <li><a href="{{route("welcome")}}">Welcome</a></li>
       <li><a href="{{route("users.all")}}">All users</a></li>
       <li><a href="{{route("users.all")}}">Add users</a></li>
   </ul>

   <ul>
       <!--dd() DEBUG  -->

   @foreach ($userInfo as $key => $value)
   {
       <li>{{$key}} => {{$value}}</li>
   }
   @endforeach
   </ul>

   <p>Dados Curso</p>
   <p>Nome: {{$info["name"]}}</p>
   <p>Nome: {{$info["hours"]}}</p>
   <ul>
       <!--dd() DEBUG  -->

   @foreach ($info as $key => $value)
   {
       <li>{{$key}} => {{$value}}</li>
   }
   @endforeach
   </ul>

   <p>Dados Instituto</p>
   <p>Nome: {{$courseInfo["name"]}}</p>
   <p>Nome: {{$courseInfo["address"]}}</p>
   <p>Nome: {{$courseInfo["email"]}}</p>

   <h1 class="text-center bg-info text-light">LIST OF ARRAY</h1>
   <ul class="bg-dark list-group">
       @foreach ($array as $item)
           <hr class="border-info"  />
           <li class="text-light text-center">ID: {{$item["id"]}} </li>
           <li class="text-light text-center">NAME: {{$item["name"]}}</li>
           <li class="text-light text-center">EMAIL: {{$item["email"]}}</li>
           <hr class="border-info"  />
       @endforeach

   </ul>


@endsection


