<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Foro</title>
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

    <div class="container mt-5">

    <div class="row">
    <div class="col-md-1"></div>
      <!-- Blog Entries Column -->
      <div class="col-md-10">

        <h1 class="my-4">Foro
        </h1>
        <button type="button" class="btn btn-primary mb-3 mt-3" style="background-color: purple; border-color:purple">Añadir aporte</button>

        <!-- Blog Post -->
        <div class="card mb-4">
          <div class="card-body">
            <h2 class="card-title">Titulo</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary"style="background-color: purple; border-color:purple">Leer mas &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2020 by
            Hammer Works
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <div class="card-body">
            <h2 class="card-title">Titulo</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary" style="background-color: purple; border-color:purple"">Leer mas &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2020 by
            Bernd Losc
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <div class="card-body">
            <h2 class="card-title">Titulo</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary" style="background-color: purple; border-color:purple">Leer mas &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2020 by
            John Went
          </div>
        </div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Anterior</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Siguiente &rarr;</a>
          </li>
        </ul>

      </div>
    
      <div class="col-md-1"></div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


    
     <script src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>


</html>