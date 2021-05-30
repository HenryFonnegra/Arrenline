@extends('layouts.arrenline')
@section('content')
<div style ="background-color: #FAFAFA" >
    <div class="container">
        <div class="row">
			<div class="col-md-5 py-4 mx-auto">
			    <div id="first">
				    <div class="myform form ">
                        <div class = "card card-primary">
                            <div class="col-md-12">
					            <div class="logo mb-5">
						            <div class="col-md-12 text-center">
                                        <div class="card-header" >
							                <h1>Arrenline</h1>
                                        </div>
						            </div>
                                        <form action="" method="post" name="login">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Correo Electronico</label>
                                                <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingrese el correo electronico">
                                            </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Contraseña</label>
                                                    <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Ingrese la contraseña">
                                                </div>
                                                <div class="form-group">
                                                    <p class="text-center">Al registrarse acepta nuestras <a href="#">Condiciones de uso</a></p>
                                                </div>
                                                    <div class="col-md-12 text-center ">
                                                        <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Ingresar</button>
                                                    </div>
                                                    <div class="col-md-12 ">
                                                        <div class="login-or">
                                                            <hr class="hr-or">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <p class="text-center">¿No tienes una cuenta? <a href="#" id="signup">Registrate aquí</a></p>

                                                    </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
		</div>
    </div>
</div>
@endsection
