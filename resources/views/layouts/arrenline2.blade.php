<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Arrenline</title>
		<!-- Meta tag Keywords -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8" />
		<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- @toastr_css -->
        <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/fontawesome-all.css') }}">
        <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/popuo-box.css') }}">
        <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/menu.css') }}">


		<!-- web fonts -->
		<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
			rel="stylesheet">

        <!--<script type="text/javascript" src='../test-credentials.js'></script>-->
        <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
        <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
        <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
        <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
        <script type="text/javascript" >window.ENV_VARIABLE = 'https://developer.here.com'</script>
        <!--<script src='https://developer.here.com/javascript/src/iframeheight.js'></script>-->

    </head>

    <body>
        <div class="wrapper">
            <!-- Barra azul de opciones -->
            <div class="agile-main-top">
                <div class="container-fluid">
                    <div class="row main-top-w3l py-2">

                        <div class="col-lg-4 header-most-top">
                            <p class="text-white text-lg-left text-center"> <a href="/" class="text-white"> Arriendos Online</a>
                                <!-- <i class="fas fa-shopping-cart ml-1"></i> -->
                            </p>
                        </div>

                        <div class="col-lg-8 header-right mt-lg-0 mt-2">
                            <!-- Opciones barra azul -->
                            <ul>

                                <li class="text-center border-right text-white">
                                </li>
                                <li class="text-center border-right text-white">
                                </li>

                                <li class="text-center border-right text-white">
                                    <i class="fas fa-phone mr-2"></i> +57 314 544 8552
                                </li>
                                <li class="text-center border-right text-white">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
                                        <i class="fas fa-sign-in-alt mr-2"></i> Iniciar seccion </a>
                                </li>
                                <li class="text-center text-white">
                                    <a href="registrar" class="text-white">
                                        <i class="fas fa-sign-out-alt mr-2"></i>Registrarse </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <!-- log in -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center">Log In</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label class="col-form-label">Username</label>
                                    <input type="text" class="form-control" placeholder=" " name="Name" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input type="password" class="form-control" placeholder=" " name="Password" required="">
                                </div>
                                <div class="right-w3l">
                                    <input type="submit" class="form-control" value="Log in">
                                </div>
                                <div class="sub-w3l">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
                                    </div>
                                </div>
                                <p class="text-center dont-do mt-3">Don't have an account?
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2">
                                        Register Now</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div style="width: 100%">
                <div class="login-or">
                    <hr class="hr-or">
                </div>
            </div>

            <div class="flex-center position-ref full-height">
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>

        <section class="copyright">
            <div class="copy-right py-3">
                <div class="container">
                    <p class="text-center text-white">© 2021 Arrenline. Derechos reservados | Diseñado por
                        <a href=""> CFJPP.</a>
                    </p>
                </div>
            </div>
        </section>

    </body>


    <!-- jQuery -->
    <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap 4 -->
    <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
</html>
