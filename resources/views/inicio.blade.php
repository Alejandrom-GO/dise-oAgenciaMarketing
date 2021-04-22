<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio</title>
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>
    <body>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white ">
        <div class="container">
            <a class=" navbar-brand " href="# ">TecnoMx</a>
            <button class="navbar-toggler " type="button " data-bs-toggle="collapse " data-bs-target="#navbarCollapse " aria-controls="navbarCollapse " aria-expanded="false " aria-label="Toggle navigation ">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarCollapse ">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                    <li class=" nav-item d-flex ">
                        <a class="nav-link align-self-center " aria-current="page " href="/">Home</a>
                    </li>
                    
                    <li class="nav-item d-flex ">
                        <a class="nav-link align-self-center " href="/quienesSomos">Quienes Somos</a>
                    </li>

                    <li class="nav-item d-flex ">
                        <a class="nav-link align-self-center " href="/dondeEstamos">Donde estamos</a>
                    </li>
                    <li class="nav-item me-2 ">
                        <a class="nav-link align-self-center " href="/foro">Foro</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>
    <section id="home" style="margin-top: 7vw; margin-bottom: 7vw; ">
            <div class="container ">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 ">
                    <div class="col item mb-2 ">
                        <div class="content mx-auto align-self-center px-4 my-5 ">
                            <h1 class="display-4 fw-bold ">Agencia<span class="text">.</span></h1>
                            <p class="lead mb-4 title display-6 "> de Desarrollo y Gestion de Software</p>
                            <a href="# " class="btn btn-primary mb-5 btnContact" id="btn_contact"><strong>Contactanos Ahora</strong> </a>
                           
                        </div>
                    </div>
                    <div class="col item ">
                        <div class="content mx-auto align-self-center px-2 my-2 ">
                            <img src="{{asset('css/img/management.svg')}}" class="img-fluid">
                        </div>
                    </div>

                </div>

            </div>

    </section>




     <script src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>


</html>