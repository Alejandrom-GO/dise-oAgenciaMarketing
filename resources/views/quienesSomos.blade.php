<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Quienes Somos</title>
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
    <section id="about">
        <div class="container ">
            <h2 class="title">Quienes Somos</h2>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 ">
                <div class="col item ">
                    <h2>Somos la agencia creativa <span class="text ">de Desarrollo de Software.</span> </h2>
                    <p>Somos una agencia de desarrollo software y marketing online formada por un grupo de profesionales especializados en áreas concretas, que trabajamos codo con codo para alcanzar tus metas. Diseñamos y desarrollamos soluciones a medida basadas en aplicaciones móviles, webs y nuevas tecnologías.<br><br>  Ofrecemos equipos de programadores especialistas en diferentes tecnologías. Hemos 
                    desarrollado software para gran variedad de industrias, entre las que 
                    destacan la bancaria, seguros, comercios, construcción, eventos, educación, belleza, música.

                        </p>
                    
                </div>
                <div class="col item ">
                    <h2>Desarrollo <span class="text"> Web</span></h2>
                    <p>Nuestros Desarrolladores Web se mantienen actualizados en las tecnologías para poder ofrecer la mejor experiencia e innovación en todas las aplicaciones que creamos. Nuestra experiencia es especialmente en: Windows  con Microsoft .NET, y en Linux con Laravel PHP 
                    en el lado del servidor. En la interface gráfica utilizamos AngularJS y React principalmente.
                    </p>
                    <br>
                    <h2>Desarrollo <span class="text "> Apps</span></h2>
                    <p>Desarrollamos aplicación móviles para iOS y Android utilizando tecnología React Native, la cual nos permite desarrollar con mayor flexibilidad a mejor precio. Esta es una tecnología creada por Facebook y ahora utilizada por otras compañías como AirBnB, UberEats, Tesla, Walmart, Instagram
                    </p>
                    <br>

                    <h2>Administracion de  <span class="text"> Sistemas</span></h2>
                    <p>Contamos con especialistas administradores de Sistemas para Linux principalmente. Configuración de Servicios DNS, Mail Servers, Web, FTP, Server Firewall, Administración de AWS de Amazon y otros.
                    </p>

                </div>

            </div>
        </div>
    </section>




    
     <script src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>


</html>