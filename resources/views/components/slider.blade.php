<div>
    <h1 class="ms-3 fw-bold">Eventos destacados</h1>
    <div id="carouselcontainer" class="col-sm-12 col-md-12 col-lg-12 col-xl-12 auto d-flex justify-content-center mt-3 mb-3">
        <div id="carouselExampleIndicators" class="carousel slide auto d-flex justify-content-center" data-bs-ride="carousel" >
            <div class="carousel-indicators" id="indic">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner border-1">
                <div class="carousel-item active" data-bs-interval="4000">
                    <img src="https://loremflickr.com/680/480/dog" class="d-block" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="https://loremflickr.com/680/480/cat" class="d-block" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="https://loremflickr.com/680/480/bird" class="d-block" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</div>
