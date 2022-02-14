<div>
    <div class="d-flex justify-content-center align-items-center mt-5">
        <div class="card" style="width: 50rem">
            @props(['type' => 'info', 'location'])
            <form action="{{route('events.store')}}" method="POST">
                @csrf
                <div class="m-5">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Event name" aria-label="Username" aria-describedby="basic-addon1" name="title">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Image URL" aria-label="Imagen" aria-describedby="basic-addon1" name="image">
                </div>

                <div class="input-group">
                    <span class="input-group-text">Description</span>
                    <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
                </div>
                <div class="d-flex flex-row">
                    <div class="input-group me-3">
                        <input type="date" id="date" class="my-3 form-control" name="date">
                    </div>

                    <div class="input-group ms-3">
                        <span class="input-group-text my-3">Hora</span>
                        <input type="time" id="hour" class="my-3 form-control" name="hour">
                    </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text my3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg></span>
                     <select name="location" class="form-control" id="location">
                        @foreach ($events as $location)
                            <option value="$location->location_id">{{ $location->location_id }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="Max capacity" aria-label="Capacity" aria-describedby="basic-addon1" name="max_capacity">
                </div>
                <div class="d-flex flex-row justify-content-center">
                    <button type="submit"class="btn btn-primary me-2 rounded-pill" >Guardar</button>

                    <input type="reset" class="btn btn-danger ms-2 rounded-pill" value="Borrar">

                </div>
            </form>
            </div>

        </div>
    </div>
</div>
