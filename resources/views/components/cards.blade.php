<div class="row row-cols-1 row-cols-md-2 d-flex flex-row flex-nowrap overflow-auto mt-3">
    @foreach($events as $event)
        <div class="card ms-3 mb-3 w-20 rounded-3 border-0">
            <img src="{{ $event->image }}" class="card-img-top rounded-3 m-0">
            <div class="card-body">
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-text">{{ $event->description }}</p>
                <div class="d-flex justify-content-between">
                    <div class="d-flex justify-content-center">
                        <p class="card-text"><small class="text-muted">{{ $event->date }}</small></p>
                        <p class="text-muted">/</p>
                        <p class="card-text"><small class="text-muted">{{ $event->hour }}</small></p>
                    </div>
                    <div class="d-flex justify-content-end">
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg></p>
                        <p class="card-text"><small class="text-muted">{{ $event->current_capacity }}</small></p>
                        <p class="text-muted">/</p>
                        <p class="card-text"><small class="text-muted">{{ $event->max_capacity }}</small></p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
