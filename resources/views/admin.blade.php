<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<x-header />
<div class="d-flex justify-content-center">
    <button class="btn btn-primary rounded-pill">New Event</button>
</div>
<x-admin-card />
<div class="d-flex justify-content-center">
    {!! $events->links() !!}
</div>

