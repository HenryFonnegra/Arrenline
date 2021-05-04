@extends('layouts.arrenline')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Album example · Bootstrap v5.0</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
  </head>
  <body>





  <section class="py-0 text-center container">
    <div class="row py-lg-2">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Ofertas</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      </div>
    </div>
  </section>



  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Ninth navbar example">
    <div class="container-xl">
       <div class="collapse navbar-collapse"  id="navbarsExample07XL">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Los mejores Vendedores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Del precio mas bajo al mas alto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Del precio mas alto al mas bajo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Departamento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Casas en arriendo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Fincas en arriendo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Fincas en venta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">casas en venta</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<main>










  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <h4 class="px-2" style="color: green; background-color: #BFFFC0; position: absolute;">EN VENTA</h4>
            <img src="lte/dist/img/Ofertas/F1.jpg" alt="" width="100%" height="200px">

            <div class="card-body" style="height: 310px">
              <h5><strong>Finca de 20 hectareas con buen pasto</strong></h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center" style="line-height: 30px">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ver detalles</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <h4 class="px-2" style="color: green; background-color: #BFFFC0; position: absolute;">EN VENTA</h4>
            <img src="lte/dist/img/Ofertas/F2.jpg" alt="" width="100%" height="200px">

            <div class="card-body" style="height: 310px">
              <h5><strong>Finca bonita negociable</strong></h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center" style="line-height: 30px">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ver detalles</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <h4 class="px-2" style="color:#FF4600; background-color: #FFBEA5; position: absolute;">EN ARRIENDO</h4>
            <img src="lte/dist/img/Ofertas/C1.jpg" alt="" width="100%" height="200px">

            <div class="card-body" style="height: 310px">
              <h5><strong>Casa Moderna para arrendar</strong></h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center" style="line-height: 30px">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ver detalles</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <h4 class="px-2" style="color: green; background-color: #BFFFC0; position: absolute;">EN VENTA</h4>
            <img src="lte/dist/img/Ofertas/C2.jpg" alt="" width="100%" height="200px">

            <div class="card-body" style="height: 310px">
              <h5><strong>Casa enrrejada bonita en arriendo</strong></h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center" style="line-height: 30px">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ver detalles</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <h4 class="px-2" style="color:#FF4600; background-color: #FFBEA5; position: absolute;">EN ARRIENDO</h4>
            <img src="lte/dist/img/Ofertas/F3.jpg" alt="" width="100%" height="200px">

            <div class="card-body" style="height: 310px">
              <h5><strong>Finca en arriendo de 50 hectareas</strong></h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center" style="line-height: 30px">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ver detalles</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <h4 class="px-2" style="color: green; background-color: #BFFFC0; position: absolute;">EN VENTA</h4>
            <img src="lte/dist/img/Ofertas/F4.jpg" alt="" width="100%" height="200px">

            <div class="card-body"  style="height: 310px">
              <h5><strong>Finca en venta de 30 hectareas</strong></h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center" style="line-height: 30px">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ver detalles</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <h4 class="px-2" style="color: green; background-color: #BFFFC0; position: absolute;">EN VENTA</h4>
            <img src="lte/dist/img/Ofertas/C3.jpg" alt="" width="100%" height="200px">

            <div class="card-body" style="height: 310px">
              <h5><strong>Casa Mordena con todos sus lujos</strong></h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center" style="line-height: 30px">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ver detalles</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <h4 class="px-2" style="color:#FF4600; background-color: #FFBEA5; position: absolute;">EN ARRIENDO</h4>
            <img src="lte/dist/img/Ofertas/F5.jpg" alt="" width="100%" height="200px">

            <div class="card-body"  style="height: 310px">
                <h5><strong>Finca en arriendo de 10 hectareas</strong></h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center" style="line-height: 30px">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ver Detalles</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


  </body>
</html>
@endsection

