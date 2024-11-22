@extends('layout.fmaster')

@section('content')

<div class="container h-100">
    <div class="row justify-content-sm-center h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
            <div class="text-center my-5">

            </div>
            <div class="card shadow-lg bg-secondary">
                <div class="card-body p-5">
                    <h1 class="fs-4 card-title fw-bold mb-4 text-light">Sign in</h1>

                    {{-- FORMULARIO --}}
                    <form method="POST" action="{{route("register.store")}}">
                        @csrf
                        <div class="mb-3">
                            <label class="mb-2 text-muted text-light" for="email">´Name</label>
                            <input id="name" type="text" class="form-control" name="name" value="" required="" autofocus="" fdprocessedid="8f7bri">
                                @error('name')

                                    <p style="color: red">Name not valid.</p>

                                @enderror
                        </div>
                        <div class="mb-3">
                            <label class="mb-2 text-muted text-light" for="email">E-mail</label>
                            <input id="email" type="email" class="form-control" name="email" value="" required="" autofocus="" fdprocessedid="8f7bri">
                                @error('email')

                                    <p style="color: red">Email not valid.</p>

                                @enderror
                        </div>

                        <div class="mb-3">
                            <div class="mb-2 w-100">
                                <label class="text-muted text-light" for="password">Password</label>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" required="" fdprocessedid="2y22z">
                            @error('password')

                                    <p style="color: red">Password not valid.</p>

                                @enderror
                        </div>

                        <div class="mb-3">
                            <div class="mb-2 w-100">
                                <label class="text-muted text-light" for="password">Password Confirmation</label>
                            </div>
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required="" fdprocessedid="2y22z">
                            @error('password_confirmation')

                                    <p style="color: red">Password not valid.</p>

                                @enderror
                        </div>

                        <div class="d-flex align-items-center">
                            <button type="submit" class="btn btn-primary ms-auto text-light" fdprocessedid="i5syyn">
                                Sign In
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center mt-5 text-muted">
                Copyright © 2024 — Music Store Web
            </div>
        </div>
    </div>
</div>

@endsection
