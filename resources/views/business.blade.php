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
    ])
    <script preload src="https://kit.fontawesome.com/d544c5e79c.js" crossorigin="anonymous"></script>


    <!-- <style>
        #tour-bg::before {
            @if (empty($tour["gallery"])) background-image: url("{{asset('assets/img/background.png')}}");
            @else background-image: url("{{asset('storage/tours/').'/'.$tour['id'].'/'.$tour['gallery'][0]}}");
            @endif
        }
    </style> -->

    <style>
        #tour-bg::before {
            background-image: url("https://static.photos/office/640x360?id={{uniqid()}}");
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
        <div class="row g-4">
            <div class="col-lg-8 col-md-12 col-12">
                <div class="py-4">
                    @foreach ($company["categories"] as $category)
                    <span class="text-bg-primary badge"><i class=""></i>{{$category["name"]}}</span>
                    @endforeach
                </div>
                <h1 class="fw-bold title">{{$company["name"]}}</h1>
                <p><i class="fa-regular fa-user me-2"></i>Fundada por {{$company["founder"]}}</p>
                <!-- <hr> -->
                <div class="py-2">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="fw-bold">Acerca de nosotros</h3>
                            <p>{{$company["about_us"]}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="fw-bold">Información de Contacto</h4>
                        <div class="py-4">

                            <div class="">
                                <p class="p-0 m-0 fw-bold"><i class="text-primary fas fa-location"></i> Ubicación</p>
                                <p class="text-muted">{{$company["location_text"]}}</p>
                            </div>
                            <div class="">
                                <p class="p-0 m-0 fw-bold"><i class="text-primary fas fa-envelope"></i> Correo</p>
                                <p class="text-muted">{{$company["mail"]}}</p>
                            </div>
                            <div class="">
                                <p class="p-0 m-0 fw-bold"><i class="text-primary fas fa-phone"></i> Teléfono</p>
                                <p class="text-muted">{{$company["phone"]}}</p>
                            </div>
                            <button class="w-100 btn btn-primary">Contactar</button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>