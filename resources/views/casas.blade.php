@extends('layouts.arrenline')
@section('content')

<section>
    <hr>
    <div class="container py-3 bg-light rounded-2">
        <main class="full-box main-container">
			<!-- Page content -->
		<section class="full-box page-content">
			<!-- Page header -->
            <div class="card-header rounded-3">
                <h1 class="text-center fs-2">
                    <a href="" class="font-weight-bold font-italic" style="color:#3441BB">
                        Actualizar Datos de tu Inmueble
                    </a>
                </h1>
            </div>
			<br>
			<div class="container-fluid">
                <fieldset>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="ProductProvider" class="bmd-label-floating ">Que quieres hacer?</label>
                                    <select class="form-control rounded-3" id="ProductProvider" style="border:1px solid #3441BB"
                                    >
                                        <option>Vender</option>
                                        <option>Arrendar</option>
                                        <option>Permutar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="ProductCategory" class="bmd-label-floating">Tipo de Inmueble</label>
                                    <select class="form-control rounded-3" id="ProductCategory" style="border:1px solid #3441BB">
                                        <option>Casa</option>
                                        <option>Finca</option>
                                        <option>Habitación</option>
                                        <option>Terreno</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
				<form action="" class="form-neon" autocomplete="off">
					<fieldset>
						<legend><i class="fas fa-box-open"></i> &nbsp; Informacíon Basica</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="ProductCode" class="bmd-label-floating" >Nombre del Inmueble</label>
										<input type="text" pattern="[a-zA-Z0-9]{1,25}" class="form-control rounded-3" style="border:1px solid #3441BB" id="ProductCode" maxlength="25" placeholder="Ejemplo: Casa de dos pisos">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="ProductName" class="bmd-label-floating" >Dimensiones</label>
										<input type="text" pattern="[a-zA-Z0-9 ]{1,30}" class="form-control rounded-3" style="border:1px solid #3441BB" placeholder="Largo, Ancho, Hectareas, etc." id="ProductName" maxlength="30">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="ProductBrand" class="bmd-label-floating">Dirección</label>
										<input type="text" pattern="[a-zA-Z0-9]{1,25}" class="form-control rounded-3" style="border:1px solid #3441BB" placeholder="Ubicación exacta del inmueble" id="ProductBrand" maxlength="25">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="ProducPrice" class="bmd-label-floating">Precio</label>
										<div class="input-group rounded-3" style="border:1px solid #3441BB">
                                            <div class="input-group-prepend ">
                                              <span class="input-group-text" >$</span>
                                            </div>
                                            <input type="text" class="form-control" >
                                            <div class="input-group-append">
                                              <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
									</div>
								</div>
                                <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="ProductProvider" class="bmd-label-floating">Tipo de precio</label>
                                            <select class="form-control rounded-3" id="ProductProvider" style="border:1px solid #3441BB">
                                                <option>Negociable</option>
                                                <option>Fijo</option>
                                            </select>
                                        </div>
								</div>
							</div>
                            <form>
                                <div class="form-group">
                                  <label for="comentarios">Descripción</label>
                                  <textarea class="form-control rounded-3" style="border:1px solid #3441BB" rows="5" id="comentarios" placeholder="Haga una breve descripcion de su inmueble" name="comentarios"></textarea>
                                </div>
                            </form>
                            <div class=" rounded-1 input-group mb-3 " style="border:1px solid #3441BB" >
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text " for="inputGroupFile02">Subir</label>
                            </div>
						</div>
					<p class="text-center" style="margin-top: 40px;">
						<button type="reset" class="btn btn-primary" style="background-color: #3441BB"> <i class="fas fa-quidditch"></i> &nbsp; LIMPIAR</button>
						&nbsp; &nbsp;
						<button type="submit" class="btn btn-primary" style="background-color: #3441BB"> <i class="far fa-save"></i> &nbsp; ACTUALIZAR</button>
					</p>
				</form>
			</div>
		</section>
	</main>
    </div>
</section>

@endsection
