@extends('layouts.arrenline')
@section('content')

<section>
    <section class="carrucel">
        <!-- Carrucel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!-- Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>

            <!-- Imagenes y texto -->
            <div class="carousel-inner">
                <div class="carousel-item item1 active">
                    <div class="container">
                        <div class="w3l-space-banner">
                            <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                                <p>
                                    <span>Casas</span>
                                </p>
                                <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">
                                    <span>con vista al mar</span>
                                </h3>
                                <a class="button2" href="product.html">Ver </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item item2">
                    <div class="container">
                        <div class="w3l-space-banner">
                            <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                                <p>
                                    <span>Habitaciones</span>
                                </p>
                                <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">
                                    <span>para estudiantes</span>
                                </h3>
                                <a class="button2" href="product.html">Ver </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item item3">
                    <div class="container">
                        <div class="w3l-space-banner">
                            <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                                <p>
                                    <span>Apartamentos</span>
                                </p>
                                <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">
                                    <span>con cocina integral</span>
                                </h3>
                                <a class="button2" href="product.html">Ver </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item item4">
                    <div class="container">
                        <div class="w3l-space-banner">
                            <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                                <p>
                                    <span>Apartamentos</span>
                                </p>
                                <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">
                                    <span>amplios</span>
                                </h3>
                                <a class="button2" href="product.html">Ver </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controladores -->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="inmuebles">
        <section class="ads-grid py-sm-5 py-4">
            <section class="container py-xl-4 py-lg-2">

                <section class="Casas">
                    <!-- Titulo -->
                    <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                        <span>C</span>asas.
                    </h3>

                    <div class="row">
                        <div class="agileinfo-ads-display col-lg-12">
                            <div class="wrapper">

                                <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                                    <div class="row">

                                        <!--Primera publicacion-->
                                        <div class="col-md-4 product-men mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">

                                                <!--Imagen y boton-->
                                                <div class="men-thumb-item text-center">
                                                    <img src="{{ asset('lte/dist/img/Casas/c1.jpg') }}" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Ver</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                </div>

                                                <!--Informacion-->
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <a href="">Barrio San pedro </a>
                                                    </h4>

                                                    <div class="info-product-price my-2">
                                                        <span class="item_price">$450.000</span>
                                                        <del>$550.000</del>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!--Segunda publicacion-->
                                        <div class="col-md-4 product-men mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item text-center">
                                                    <img src="{{ asset('lte/dist/img/Casas/c2.jpg') }}" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Ver</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>

                                                </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <a href="single.html">Barrio Maria Eugenia</a>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span class="item_price">$500.000</span>
                                                        <del>$600.000</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Tercera publicacion-->
                                        <div class="col-md-4 product-men mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item text-center">
                                                    <img src="{{ asset('lte/dist/img/Casas/c3.jpg') }}" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Ver</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>

                                                </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <a href="single.html">Cabaña San Jose</a>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span class="item_price">$400.000</span>
                                                        <del>$500.000</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="business" value=" ">
                                                    <input type="hidden" name="item_name" value="Samsung Galaxy J7">
                                                    <input type="hidden" name="amount" value="200.00">
                                                    <input type="hidden" name="discount_amount" value="1.00">
                                                    <input type="hidden" name="currency_code" value="USD">
                                                    <input type="hidden" name="return" value=" ">
                                                    <input type="hidden" name="cancel_return" value=" ">
                                                    <input type="submit" name="submit" value="Ver mas publicaciones" class="button btn">
                                                </fieldset>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="Apartamentos">
                    <!-- Titulo -->
                    <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                        <span>A</span>partamentos.
                    </h3>

                    <div class="row">
                        <div class="agileinfo-ads-display col-lg-12">
                            <div class="wrapper">

                                <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                                    <div class="row">

                                        <!--Primera publicacion-->
                                        <div class="col-md-4 product-men mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">

                                                <!--Imagen y boton-->
                                                <div class="men-thumb-item text-center">
                                                    <img src="{{ asset('lte/dist/img/Apartamentos/a1.jpg') }}" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Ver</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                </div>

                                                <!--Informacion-->
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <a href="">Comuna 4 Aguachica</a>
                                                    </h4>

                                                    <div class="info-product-price my-2">
                                                        <span class="item_price">$300.000</span>
                                                        <del>$450.000</del>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!--Segunda publicacion-->
                                        <div class="col-md-4 product-men mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item text-center">
                                                    <img src="{{ asset('lte/dist/img/Apartamentos/a2.jpg') }}" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Ver</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>

                                                </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <a href="single.html">Hotel Hilton</a>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span class="item_price">$350.000</span>
                                                        <del>$500.000</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Tercera publicacion-->
                                        <div class="col-md-4 product-men mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item text-center">
                                                    <img src="{{ asset('lte/dist/img/Apartamentos/a3.jpg') }}" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Ver</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>

                                                </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <a href="single.html">Condominios Santa Isabel</a>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span class="item_price">$300.000</span>
                                                        <del>$400.000</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="business" value=" ">
                                                    <input type="hidden" name="item_name" value="Samsung Galaxy J7">
                                                    <input type="hidden" name="amount" value="200.00">
                                                    <input type="hidden" name="discount_amount" value="1.00">
                                                    <input type="hidden" name="currency_code" value="USD">
                                                    <input type="hidden" name="return" value=" ">
                                                    <input type="hidden" name="cancel_return" value=" ">
                                                    <input type="submit" name="submit" value="Ver mas publicaciones" class="button btn">
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="Habitaciones">
                    <!-- Titulo -->
                    <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                        <span>H</span>abitaciones.
                    </h3>

                    <div class="row">
                        <div class="agileinfo-ads-display col-lg-12">
                            <div class="wrapper">

                                <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                                    <div class="row">

                                        <!--Primera publicacion-->
                                        <div class="col-md-4 product-men mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">

                                                <!--Imagen y boton-->
                                                <div class="men-thumb-item text-center">
                                                    <img src="{{ asset('lte/dist/img/Habitaciones/h1.jpg') }}" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Ver</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                </div>

                                                <!--Informacion-->
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <a href="">Residencia Donde Gloria</a>
                                                    </h4>

                                                    <div class="info-product-price my-2">
                                                        <span class="item_price">$200.000</span>
                                                        <del>$300.000</del>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!--Segunda publicacion-->
                                        <div class="col-md-4 product-men mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item text-center">
                                                    <img src="{{ asset('lte/dist/img/Habitaciones/h2.jpg') }}" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Ver</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>

                                                </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <a href="single.html">Hotel Faraon</a>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span class="item_price">$150.000</span>
                                                        <del>$250.000</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Tercera publicacion-->
                                        <div class="col-md-4 product-men mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item text-center">
                                                    <img src="{{ asset('lte/dist/img/Habitaciones/h3.jpg') }}" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Ver</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>

                                                </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <a href="single.html">Villa campester Catalina</a>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span class="item_price">$200.000</span>
                                                        <del>$300.000</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="business" value=" ">
                                                    <input type="hidden" name="item_name" value="Samsung Galaxy J7">
                                                    <input type="hidden" name="amount" value="200.00">
                                                    <input type="hidden" name="discount_amount" value="1.00">
                                                    <input type="hidden" name="currency_code" value="USD">
                                                    <input type="hidden" name="return" value=" ">
                                                    <input type="hidden" name="cancel_return" value=" ">
                                                    <input type="submit" name="submit" value="Ver mas publicaciones" class="button btn">
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>

        </section>
    </section>

</section>



<section class="copyright">
	<div class="copy-right py-3">
		<div class="container">
			<p class="text-center text-white">© 2021 Arrenline. Derechos reservados | Diseñado por
				<a href=""> CFJPP.</a>
			</p>
		</div>
	</div>
</section>

@endsection
