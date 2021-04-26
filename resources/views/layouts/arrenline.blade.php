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
                            <p class="text-white text-lg-left text-center">Arriendos Online
                                <!-- <i class="fas fa-shopping-cart ml-1"></i> -->
                            </p>
                        </div>

                        <div class="col-lg-8 header-right mt-lg-0 mt-2">
                            <!-- Opciones barra azul -->
                            <ul>
                                <li class="text-center border-right text-white">
                                    <i class="fas fa-phone mr-2"></i> +57 314 544 8552
                                </li>
                                <li class="text-center border-right text-white">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
                                        <i class="fas fa-sign-in-alt mr-2"></i> Iniciar seccion </a>
                                </li>
                                <li class="text-center text-white">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
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

        	<!-- register -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Register</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label class="col-form-label">Your Name</label>
                                    <input type="text" class="form-control" placeholder=" " name="Name" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Email</label>
                                    <input type="email" class="form-control" placeholder=" " name="Email" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input type="password" class="form-control" placeholder=" " name="Password" id="password1" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password2" required="">
                                </div>
                                <div class="right-w3l">
                                    <input type="submit" class="form-control" value="Register">
                                </div>
                                <div class="sub-w3l">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
                                        <label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms & Conditions</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- header-bottom-->
            <div class="header-bot">
                <div class="container">
                    <div class="row header-bot_inner_wthreeinfo_header_mid">
                        <!-- Logo y nombre -->
                        <div class="col-md-3 logo_agile">
                            <h1 class="text-center">
                                <a href="" class="font-weight-bold font-italic">
                                    Arrenline
                                </a>
                            </h1>
                        </div>

                        <!-- header-bot -->
                        <div class="col-md-9 header mt-4 mb-md-0 mb-4">
                            <div class="row">
                                <!-- Barra de busqueda -->
                                <div class="col-10 agileits_search">
                                    <form class="form-inline" action="#" method="post">
                                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" required>
                                        <button class="btn my-2 my-sm-0" type="submit">Buscar</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        	<!-- Barra de opciones -->
            <div class="navbar-inner">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <ul class="navbar-nav">

                                <li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
                                    <a class="nav-link" href="">Inicio
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>

                                <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Electronics
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="agile_inner_drop_nav_info p-4">
                                            <h5 class="mb-3">Mobiles, Computers</h5>
                                            <div class="row">
                                                <div class="col-sm-6 multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <li>
                                                            <a href="product.html">All Mobile Phones</a>
                                                        </li>
                                                        <li>
                                                            <a href="product.html">All Mobile Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="product.html">Cases & Covers</a>
                                                        </li>
                                                        <li>
                                                            <a href="product.html">Screen Protectors</a>
                                                        </li>
                                                        <li>
                                                            <a href="product.html">Power Banks</a>
                                                        </li>
                                                        <li>
                                                            <a href="product.html">All Certified Refurbished</a>
                                                        </li>
                                                        <li>
                                                            <a href="product.html">Tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="product.html">Wearable Devices</a>
                                                        </li>
                                                        <li>
                                                            <a href="product.html">Smart Home</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <li>
                                                            <a href="product.html">Laptops</a>
                                                        </li>
                                                        <li>
                                                            <a href="product.html">Drives & Storage</a>
                                                        </li>
                                                        <li>
                                                            <a href="product.html">Printers & Ink</a>
                                                        </li>
                                                        <li>
                                                            <a href="product.html">Networking Devices</a>
                                                        </li>
                                                        <li>
                                                            <a href="product.html">Computer Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="product.html">Game Zone</a>
                                                        </li>
                                                        <li>
                                                            <a href="product.html">Software</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Appliances
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="agile_inner_drop_nav_info p-4">
                                            <h5 class="mb-3">TV, Appliances, Electronics</h5>
                                            <div class="row">
                                                <div class="col-sm-6 multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <li>
                                                            <a href="product2.html">Televisions</a>
                                                        </li>
                                                        <li>
                                                            <a href="product2.html">Home Entertainment Systems</a>
                                                        </li>
                                                        <li>
                                                            <a href="product2.html">Headphones</a>
                                                        </li>
                                                        <li>
                                                            <a href="product2.html">Speakers</a>
                                                        </li>
                                                        <li>
                                                            <a href="product2.html">MP3, Media Players & Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="product2.html">Audio & Video Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="product2.html">Cameras</a>
                                                        </li>
                                                        <li>
                                                            <a href="product2.html">DSLR Cameras</a>
                                                        </li>
                                                        <li>
                                                            <a href="product2.html">Camera Accessories</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <li>
                                                            <a href="product2.html">Musical Instruments</a>
                                                        </li>
                                                        <li>
                                                            <a href="product2.html">Gaming Consoles</a>
                                                        </li>
                                                        <li>
                                                            <a href="product2.html">All Electronics</a>
                                                        </li>
                                                        <li>
                                                            <a href="product2.html">Air Conditioners</a>
                                                        </li>
                                                        <li>
                                                            <a href="product2.html">Refrigerators</a>
                                                        </li>
                                                        <li>
                                                            <a href="product2.html">Washing Machines</a>
                                                        </li>
                                                        <li>
                                                            <a href="product2.html">Kitchen & Home Appliances</a>
                                                        </li>
                                                        <li>
                                                            <a href="product2.html">Heating & Cooling Appliances</a>
                                                        </li>
                                                        <li>
                                                            <a href="product2.html">All Appliances</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                                    <a class="nav-link" href="about.html">About Us</a>
                                </li>

                                <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                                    <a class="nav-link" href="product.html">New Arrivals</a>
                                </li>

                                <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pages
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="product.html">Product 1</a>
                                        <a class="dropdown-item" href="product2.html">Product 2</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="single.html">Single Product 1</a>
                                        <a class="dropdown-item" href="single2.html">Single Product 2</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="checkout.html">Checkout Page</a>
                                        <a class="dropdown-item" href="payment.html">Payment Page</a>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact Us</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>



            <div class="flex-center position-ref full-height">
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>

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
