<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<x-header />
<div class="d-flex justify-content-center">
    <a href="/admin/create"><button class="btn btn-primary rounded-pill">Añadir evento</button></a>
</div>

<x-admin-card />
<div class="d-flex justify-content-center pb-5">
    {!! $events->links() !!}
</div>

<x-footer />
