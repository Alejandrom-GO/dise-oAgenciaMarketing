<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Donde estamos</title>
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
    <section id="maps">
        <div class="container ">
            <h2 class="title">Ubicanos</h2>
            <br>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 ">
                <div class="col item ">
                    <h2>Estas muy cerca de poder <strong style="color: purple;">lograr tus sueños</strong> </h2>
                    <br>
                    <img class="img-fluid " src="css/img/NavIsometric.svg " alt=" ">

                </div>
                <div class="col item ">
                    <div class="card ">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233.90776993708926!2d-97.96258181169054!3d20.278553465145755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d08f6304c9e07f%3A0xde34ebac70c4427c!2sAllende%20154%2C%20Col%20Centro%2C%2073080%20Xicotepec%20de%20Ju%C3%A1rez%2C%20Pue.!5e0!3m2!1ses!2smx!4v1610950493652!5m2!1ses!2smx "
                            width="600 " height="450 " frameborder="0 " style="border:0; " allowfullscreen=" " aria-hidden="false " tabindex="0 "></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <script src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>


</html>