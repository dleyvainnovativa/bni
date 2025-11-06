<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>BNI</title>
    <meta name="description" content="BNI | Directorio">
    <!-- Options: default | black | black-translucent -->
    <meta name="theme-color" content="#CF2030">

    @vite(['resources/scss/app.scss', 'resources/js/app.js','resources/css/theme.css',
    ])
    <script preload src="https://kit.fontawesome.com/d544c5e79c.js" crossorigin="anonymous"></script>
</head>

<body class="bg-white h-100">
    @include('components.header')
    <section class="text-bg-primary py-5" id="tour-bg">
        <div class="container align-content-start" id="hero-content">
            <div class="row g-2 text-start py-4">
                <!-- <div class="col-12 text-center">
                    <h4 class=""><span class="badge text-bg-light"><i class="fa-regular fa-lightbulb me-2"></i>Gestión de torneos simplificada</span></h4>
                </div> -->
                <div class="col-12 col-md-10 col-lg-7">
                    <h2 class="title">Conéctate con empresas líderes</h2>
                </div>
                <div class="col-12 col-md-10 col-lg-8">
                    <small class="description">Descubre y conéctate con empresas innovadoras de diversas industrias. Crea relaciones comerciales significativas que impulsen el crecimiento.</small>
                </div>
                <div class="col-12 py-4">
                    <a class="btn btn-outline-light btn-lg" href="{{env('APP_URL')}}search"><i class="fas fa-search me-3"></i>Buscar empresas</a>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-5">
        <div class="container">
            <div class="text-start py-4">
                <h1 class="fs-1 fw-bold">Explorar por categoría</h1>
                <small class="text-muted description">Descubre empresas organizadas por industria y especialidad</small>
            </div>
            <div class="row g-4 py-4">
                @foreach ($categories as $category)

                <div class="col-12 col-md-6 col-lg-4">
                    <a href="category/{{$category['category_id']}}" class="card h-100 shadow-sm btn btn-light text-start">
                        <div class="card-body">
                            <div class="feature col">
                                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient mb-3">
                                    <i class="{{$category['icon']}} fa-lg"></i>
                                </div>
                                <h3 class="text-body-emphasis">{{$category["category_name"]}}</h3>
                                <p>{{$category["category_description"]}}</p>
                                <small class="text-primary fw-bold">{{$category["company_count"]}} compañías</small>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

    </section>
    <section class="bg-light py-5">
        <div class="container text-center">

            <div class="row">
                <div class="col-6 col-md-3">
                    <h1 class="text-primary fw-bold">109</h1>
                    <p class="text-muted">Compañías</p>
                </div>
                <div class="col-6 col-md-3">
                    <h1 class="text-primary fw-bold">6</h1>
                    <p class="text-muted">Categorías</p>
                </div>
                <div class="col-6 col-md-3">
                    <h1 class="text-primary fw-bold">4</h1>
                    <p class="text-muted">Capítulos</p>
                </div>
                <div class="col-6 col-md-3">
                    <h1 class="text-primary fw-bold">24/7</h1>
                    <p class="text-muted">Soporte</p>
                </div>
            </div>
        </div>

    </section>

</body>

</html>