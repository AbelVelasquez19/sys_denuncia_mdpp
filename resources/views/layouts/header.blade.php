<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <title>Denuncia</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('asset/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/app.css')}}" rel="stylesheet"> 
   {{--  <script src="{{ mix('asset/css/app.css') }}"></script> --}}
   <script src="https://kit.fontawesome.com/1958147e4f.js" crossorigin="anonymous"></script>
</head>
<style>
    fieldset {
        border: 1px solid rgb(194, 194, 194) !important;
        padding: 5px 10px !important;
        border-radius: 5px;
        height: 100%;
    }
    legend {
        width: auto !important;
        font-size: 0.9rem !important;
        padding: 0 1px !important;
        float: none !important;
    }
    .btn-primary{
        background: #dd4646  !important;
        border-color: #bd4848 !important;
    }
    .text-primary{
        color: #dd4646  !important;
    }
    .btn-primary:hover{
        background: #852222 !important;
    }
    .link a{
        color: #dd4646  !important;
    }
    .items-icon{
        width: 15%;
        border: 1px solid #fff;
        padding: 1%;
        display: flex;
        flex-direction: column;
        text-align: center;
        margin-left: 1%;
        width: 150px;
        height: 150px;
        border-radius: 5%;
    }
    .items-icon img{
        widows: 50%;
        height: 50%;
    }
    .items-icon:hover{
        background: 1px solid rgb(243, 243, 243, 0.3) !important;
    }
    .active_menu{
        background: #fff !important;
    }

    
</style>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid text-light p-0" style="background: #dd4646  !important">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Call. 9 de Junio 100, Puente Piedra 15115</small>
                </div>
                {{-- <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>LUNES A VIERNES DE 8:00 AM A 6:00 PM SÁBADOS (SOLO PAGOS) DE 8:00 AM A 1:00 PM </small>
                </div> --}}
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>(01) 219-6200</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://m.facebook.com/MunicipalidadPuentePiedra" target="_black"><i class="fab fa-facebook-f"></i></a>
                    {{-- <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-linkedin-in"></i></a> --}}
                    <a class="btn btn-square btn-link rounded-0" href="https://www.instagram.com/municipalidad_puentepiedra/" target="_black"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0">
                {{-- <img src="https://virtual2.munipuentepiedra.gob.pe/assets/tools/image/logo_muni_color.png" alt="" width="100%" height="100%"> --}}
            </h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="#" class="nav-item nav-link active">Inicio</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Denuncias</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{route('index')}}" class="dropdown-item">Denuncia Ambiental</a>
                        <a href="{{route('infra-index')}}" class="dropdown-item">Denuncia Gou</a>
                    </div>
                </div>
               {{--  <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Empezar<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow" data-wow-delay="0.1s">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <a href="{{route('index')}}" class="items-icon  {{ request()->routeIs('index') ? 'active_menu' : '' }}">
                    <img src="{{asset('images/proteccion-del-medio-ambiente.png')}}" alt="Denuncia Ambiental">
                    <span>Denuncia Ambiental</span>
                </a>
                <a href="{{route('infra-index')}}" class="items-icon {{ request()->routeIs('infra-index') ? 'active_menu' : '' }}">
                    <img src="{{asset('images/asistente-virtual.png')}}" alt="Denuncia Ambiental">
                    <span> Denuncia GOU </span>
                </a>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
