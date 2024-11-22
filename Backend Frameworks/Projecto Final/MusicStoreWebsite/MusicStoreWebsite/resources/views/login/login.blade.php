@extends('layout.fmaster')

@section('content')

<div class="container h-100">
    <div class="row justify-content-sm-center h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
            <div class="text-center my-5">

            </div>
            <div class="card shadow-lg bg-secondary">
                <div class="card-body p-5">
                    <h1 class="fs-4 card-title fw-bold mb-4 text-light">Login</h1>

                    {{-- FORMULARIO --}}
                    <form method="POST" action="{{route("login")}}">
                        @csrf
                        <div class="mb-3">
                            <label class="mb-2 text-muted text-light" for="email">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="" required="" autofocus="" fdprocessedid="8f7bri">
                                @error('email')

                                    <p style="color: red">Email address not in the correct format.</p>

                                @enderror
                        </div>

                        <div class="mb-3">
                            <div class="mb-2 w-100 ">
                                <label class="text-muted text-light" for="password">Password</label>
                            </div>
                            <input id="password" type="password" class="form-control " name="password" required="" fdprocessedid="2y22z">
                                @error('password')

                                    <p style="color: red">Password not in the correct format.</p>

                                @enderror
                        </div>

                        <div class="d-flex align-items-center">
                            <button type="submit" class="btn btn-primary ms-auto text-white" fdprocessedid="i5syyn">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer py-3 border-0">
                    <div class="text-center text-white">
                        Don't have an account? <a href="{{route("sign.form")}}" class="text-white">Create One</a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 text-muted">
                Copyright © 2024 — Music Store Web
            </div>
        </div>
    </div>
</div>

@endsection
