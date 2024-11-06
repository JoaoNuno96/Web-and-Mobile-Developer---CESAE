@extends('layout.femaster')
@section('content')


<form action="{{route("users.add")}}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nome</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nome" aria-describedby="emailHelp" required>
    </div>

    @error('name')
        <p style="color: red"> Nome inválido!</p>
    @enderror

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp" required>
      </div>


    @error('email')
        <p style="color: red"> Email inválido!</p>
    @enderror

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Password</label>
        <input type="password" name="senha" class="form-control" id="exampleInputEmail1" placeholder="Password" aria-describedby="emailHelp" required>
      </div>

      @error('password')
        <p style="color: red"> Password inválido!</p>
      @enderror

    <button type="submit" class="btn btn-primary">Registar</button>

  </form>

  @endsection
