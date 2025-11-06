<nav class="navbar navbar-expand navbar-light bg-white" aria-label="Second navbar example">
    <div class="container">
        <a class="navbar-brand" href="{{env('APP_URL')}}"><img src="{{ asset('assets/img/logo.png') }}" alt="" height="30"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav me-auto">
            </ul>
            <a class="nav-link" href="{{env('APP_URL')}}search"><i class="fas fa-search me-2"></i>Buscar</a>
        </div>
    </div>
</nav>