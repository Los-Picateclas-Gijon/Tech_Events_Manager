@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">{{ __('Dashboard') }}
                    <a href="/">Volver</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div class="d-flex justify-content-center mt-4">
                        <a href="/admin/create"><button type="button" class="btn btn-primary rounded-pill me-1">Crear Evento</button></a>
                        <a href="/admin"><button type="button" class="btn btn-primary rounded-pill ms-1">Dashboard</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
