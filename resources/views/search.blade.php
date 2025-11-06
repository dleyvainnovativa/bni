<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>BNI | Búsqueda</title>
    <meta name="description" content="Tu experiencia de pádel.">
    <!-- Options: default | black | black-translucent -->
    <meta name="theme-color" content="#CF2030">

    @vite(['resources/scss/app.scss', 'resources/js/app.js','resources/css/theme.css',
    'resources/js/search.js'
    ])
    <script preload src="https://kit.fontawesome.com/d544c5e79c.js" crossorigin="anonymous"></script>
</head>

<body class="bg-white h-100">
    @include('components.header')
    <section class="text-bg-primary py-5" id="tour-bg">
        <div class="container align-content-start" id="hero-content">
            <div class="row g-2 text-start">
                <div class="col-12 col-md-8">
                    <h2 class="subtitle">Buscar empresas</h2>
                    <h4>Encuentra el socio comercial perfecto para tus necesidades</h4>
                </div>
            </div>
        </div>
    </section>
    <div class="py-4 container">
        <div class="">
            <div class="row g-1">
                <div class="col-md-12 col-12">
                    <!-- <label class="form-label">Buscar empresa</label> -->
                    <div class="input-group mb-3">
                        <span class="input-group-text text-bg-light" id="basic-addon1"><i class="fa-solid fa-search"></i></span>
                        <input class="form-control form-control-lg" type="text" placeholder="Empresa / Fundador" id="searchInput">
                        <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasCategories" aria-controls="offcanvasCategories" class="btn btn-primary btn-lg"><i class="fas fa-filter"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 bg-white">
            <div class="">
                <div class="row g-4">
                    @foreach ($companies as $company)

                    <a href="{{ env('APP_URL') }}business/{{ $company['id'] }}"
                        class="col-12 col-md-6 col-lg-4 text-decoration-none"
                        data-categories="{{ collect($company['categories'])->pluck('id')->join(',') }}">

                        <div class="card h-100 shadow-sm">
                            <div class="position-absolute">
                                <span class="badge text-bg-primary p-2 m-2"></span>
                            </div>
                            @if (empty($company["banner"]))
                            <img src="https://static.photos/office/640x360?id={{uniqid()}}" class="card-img-top" alt="...">
                            @else
                            <img src="{{asset('assets/img/banners/').'/'.$company['banner']}}" class="card-img-top" alt="...">
                            @endif
                            <!-- <img src="https://static.photos/office/640x360?id={{uniqid()}}" class="card-img-top" alt="..."> -->

                            <div class="card-body">
                                <h5 class="card-title">{{$company["name"]}}</h5>
                                <div class="d-flex flex-wrap gap-2 text-muted small">
                                    <div class="d-flex align-items-center me-4">
                                        <span class="fw-bold"><i class="fa-regular fa-user"></i></span><span class="ms-1">{{$company["founder"]}}</span>
                                    </div>
                                </div>
                                <div class="row g-2 py-2">
                                    <div class="col-auto">
                                        @foreach ($company["categories"] as $category)
                                        <span class="badge text-bg-primary">{{$category["name"]}}</span>

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer py-3 bg-white">
                                <small>{{$company["about_us"]}}</small>
                            </div>
                        </div>
                    </a>
                    @endforeach

                </div>
            </div>
        </div>
        @include("components.categories")
</body>

</html>