@extends('layout.femaster')
@section('content')

<p class="text-center">USER#{{$user->id}}</p>

<form action="{{route("users.update")}}" method="POST">
    @csrf

    <input type="hidden" name="user" value="{{$user->id}}" class="form-control" id="exampleInputEmail1" placeholder="Nome" aria-describedby="emailHelp" required>

    <div class="mb-3">
      <label for="userName" class="form-label">Nome</label>
      <input type="text" name="name" value="{{$user->name}}" class="form-control" id="userName" placeholder="Nome" aria-describedby="emailHelp" required>
    </div>

    @error('name')
        <p style="color: red"> Nome inválido!</p>
    @enderror

    <div class="mb-3">
        <label for="userEmail" class="form-label">Email</label>
        <input type="email" name="email" value="{{$user->email}}" class="form-control" id="userEmail" placeholder="Email" aria-describedby="emailHelp" required>
      </div>


    @error('email')
        <p style="color: red"> Email inválido!</p>
    @enderror

      <div class="mb-3">
        <label for="userPassword" class="form-label">Password</label>
        <input type="password" name="password" value="{{$user->password}}" class="form-control" id="userPassword" placeholder="Password" aria-describedby="emailHelp" readonly>
      </div>

      @error('password')
        <p style="color: red"> Password inválido!</p>
      @enderror

      <div class="mb-3">
        <label for="userNif" class="form-label">NIF</label>
        <input type="text" name="nif" value="{{$user->nif}}" class="form-control" id="userNif" placeholder="NIF" aria-describedby="emailHelp" disabled>
      </div>

      @error('nif')
          <p style="color: red"> NIF inválido!</p>
      @enderror

      <div class="mb-3">
        <label for="userAddress" class="form-label">Morada</label>
        <input type="text" name="morada" value="{{$user->address}}" class="form-control" id="userAddress" placeholder="Morada" aria-describedby="emailHelp" >
      </div>

      @error('morada')
          <p style="color: red"> Morada invalida inválido!</p>
      @enderror



    <button type="submit" class="btn btn-primary">Atualizar</button>

  </form>



@endsection

