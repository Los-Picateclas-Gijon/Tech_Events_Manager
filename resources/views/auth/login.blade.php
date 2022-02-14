<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>


<body>
    <x-header />

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('register') }}">Register</a>
                        </li>

                    </ul>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end"></label>

                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"> <i
                                                class="fas fa-envelope-square"></i></span>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror " name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus
                                            placeholder="E-mail">
                                    </div>

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
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"> <i
                                                class="fas fa-unlock-alt"></i></span>
                                        <input id="password" type="password"
                                            class=" form-control @error('password') is-invalid @enderror  "
                                            name="password" required autocomplete="current-password"
                                            placeholder="Password ">

                                    </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="d-flex justify-content-center">
                                <div class="mb-3">
                                    <button type="submit" class="btn rounded-pill " id="login_button">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                            <div class="text">
                                <a class="nav-link " href="{{ route('register') }}"> <u>¿No
                                        tienes cuenta? Resgístrate aquí</u></a>
                                <u>¿Has olvidado tu contraseña?</u>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<x-footer />
