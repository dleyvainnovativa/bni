<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>BNI | Búsqueda</title>
    <meta name="description" content="Tu experiencia de pádel.">
    <meta name="theme-color" content="#CF2030">

    @vite(['resources/scss/app.scss', 'resources/js/app.js','resources/css/theme.css','resources/js/business.js'
    ])
    <script preload src="https://kit.fontawesome.com/d544c5e79c.js" crossorigin="anonymous"></script>
    <style>
        #tour-bg::before {
            @if (empty($company["banner"])) background-image: url("https://static.photos/office/640x360?id={{uniqid()}}");
            @else background-image: url("{{asset('assets/img/banners/').'/'.$company['banner']}}");
            @endif
        }
    </style>
</head>

<body class="bg-white h-100">
    @include('components.header')
    <section class="text-white h-40" id="tour-bg">
        <div class="container h-100 align-content-end" id="hero-content">
        </div>
    </section>
    <section class="py-4 container">
        @foreach ($company["categories"] as $category)
        <span class="text-bg-primary badge mb-3"><i class=""></i>{{$category["name"]}}</span>
        @endforeach
        <div class="row">
            @if (!empty($company["logo"]))
            <p class="my-auto m-0">
                <img class="my-auto" src="{{ asset('assets/img/logos/').'/'.$company['logo'] }}" alt="" height="70">
            </p>
            @endif
            <div class="col-auto">
            </div>
        </div>
        <!-- <hr> -->
        <div class="row g-4">
            <div class="col-lg-8 col-md-12 col-12">
                <h1 class="fw-bold title">{{$company["name"]}}</h1>
                <p class="description text-muted py-2">
                    <i class="fa-regular fa-user me-2 text-primary"></i>Fundada por {{$company["founder"]}}
                <p>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body p-4">
                                <h2 class="fw-bold">Acerca de nosotros</h2>
                                <p class="description">{{$company["about_us"]}}</p>
                            </div>
                        </div>
                    </div>
                    @if (!empty($company["catalog"]))
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body p-4">
                                <h2 class="fw-bold">Mis Servicios</h2>
                                <a target="_blank" href="{{ asset('assets/pdf/').'/'.$company['catalog'] }}" class="btn btn-outline-primary mt-2">Descargar catálogo</a>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 mt-auto pt-4">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="pb-4">

                            <h2 class="fw-bold ">Contacto</h2>
                        </div>
                        <div class="row g-2">
                            <div class="col-12">
                                <p class="p-0 m-0 fw-bold"><i class="text-primary fas fa-location me-2"></i> Ubicación</p>
                                <p><a target="_blank" href='{{$company["location"]}}' class="text-muted">{{$company["location_text"]}}</a></p>
                            </div>
                            <div class="col-12">
                                <p class="p-0 m-0 fw-bold"><i class="text-primary fas fa-envelope me-2"></i> Correo</p>
                                <p><a target="_blank" href='mailto:{{$company["mail"]}}' class="text-muted">{{$company["mail"]}}</a></p>
                                <!-- <p class="text-muted">{{$company["mail"]}}</p> -->
                            </div>
                            <div class="col-12">
                                <p class="p-0 m-0 fw-bold"><i class="text-primary fas fa-phone me-2"></i> Teléfono</p>
                                <p><a target="_blank" href='tel:{{$company["phone"]}}' class="text-muted">{{$company["phone"]}}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <button id="save-contact-btn" class="w-100 btn btn-primary btn-lg">Guardar contacto</button>
                </div>
            </div>
        </div>
    </section>
</body>

</html>