@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link active" href="resources\views\auth\login.blade.php">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="resources\views\auth\register.blade.php">Register</a>
                    </li>
                   
                  </ul>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror  " name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       

                        <div class="row mb-0">
                            <div class="d-grid gap-2 col-8 mx-auto" >
                                <button type="submit" class="btn btn-primary btn-lg " id="boton">
                                    {{ __('Login') }}
                                </button>
                                <div class="text">
                                <u text-align: center; >¿No tienes cuenta?Resgístrate aquí</u>
                                <u>¿Has olvidado tu contraseña?</u>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
