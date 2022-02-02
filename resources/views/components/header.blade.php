<div id="header" class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
    <div class="">
        <a href="/" class="col text-decoration-none ms-5"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-align-top" viewBox="0 0 16 16">
            <rect width="100%" height="100%" rx="1" transform="matrix(1 0 0 -1 6 15)"/>
            <path d="M1.5 2a.5.5 0 0 1 0-1v1zm13-1a.5.5 0 0 1 0 1V1zm-13 0h13v1h-13V1z"/>
            </svg></a>
    </div>
    <div class="m-4">
        <button type="button" id="login-btn" class=" btn me-2 "><a href="{{ route('login') }}" style="text-decoration: none"><p style="color: white">Login</p></a></button>
        <button type="button" id="register-btn" class="btn me-3"><a href="{{ route('register') }}"style="text-decoration: none"><p style="color: white">Register</p></a></button>
    </div>
</div>


