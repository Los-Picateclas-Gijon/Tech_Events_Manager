<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<x-header />
<div class="d-flex justify-content-center">
  <a href="/admin/create"><button class="btn btn-primary rounded-pill">New Event</button></a>
</div>
<x-admin-card />
<div class="d-flex justify-content-center">
    {!! $events->links() !!}
</div>

<x-footer />
