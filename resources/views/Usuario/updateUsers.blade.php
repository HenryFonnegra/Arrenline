@extends('layouts.arrenline')
@section('content')
    <div class="container-fluid">

        <div class="container py-3 bg-light border border-2 rounded-2 col-sm-12 col-md-6 col-lg-6">

            <h1 class="text-center mb-2 font-weight-bold font-italic fs-3" style="color:#3441BB;">Actualizar datos</h1>

            <div>

                <h2 class="col-12 font-italic font-weight-bold fs-5 mb-2">Datos de cuenta</h2>

                <div class="form-floating col-sm-12 col-md-12 col-lg-12 mb-2">

                    <input type="email" class="form-control rounded-3" id="floatingEmail" placeholder="name@example.com"
                        style="border:1px solid #3441BB; height: 50%" required>
                    <label for="floatingEmail" class="ps-4" style="color: #999999; font-size: 15px">Correo
                        electrónico</label>

                </div>

                <div class="form-floating col-sm-12 col-md-12 col-lg-12 mb-2">

                    <input type="password" class="form-control  rounded-3" id="floatingPassword" placeholder="Password"
                        style="border:1px solid #3441BB; height: 50%" required>
                    <label for="floatingPassword" class="ps-4" style="color: #999999; font-size: 15px"> Contraseña</label>

                    <!-- <div id="passwordHelpBlock" class="form-text text-justify mb-2">
                            Su contraseña debe tener entre 8 y 20 caracteres, contener letras, números, una mayúscula y algún
                            caracter especial.
                        </div>-->

                </div>

                <div class="form-floating col-sm-12 col-md-12 col-lg-12">

                    <input type="password" class="form-control  rounded-3" id="floatingCPassword" placeholder="Password"
                        style="border:1px solid #3441BB; height: 50%" required>
                    <label for="floatingCPassword" class="ps-4" style="color: #999999; font-size: 15px">Confirmar
                        contraseña</label>

                    <!--<div id="passwordHelpBlock" class="form-text text-justify mb-2">
                            Su contraseña debe tener entre 8 y 20 caracteres, contener letras, números, una mayúscula y algún
                            carácter especial.
                        </div>-->

                </div>

                <div class="w-100"></div>
                <!--ruptura de fila-->

                <h2 class="col-12 font-italic font-weight-bold fs-5 mt-2 mb-2">Datos de Personales</h2>

                <div class="form-floating col-sm-12 col-md-12 col-lg-12 mb-2">

                    <input type="text" class="form-control  rounded-3" id="floatingFname" placeholder="FirstName"
                        style="border:1px solid #3441BB; height: 50%" required>
                    <label for="floatingFname" class="ps-4" style="color: #999999; font-size: 15px"> Nombre</label>

                </div>

                <div class="form-floating col-sm-12 col-md-12 col-lg-12 mb-2">

                    <input type="text" class="form-control  rounded-3" id="floatingLname" placeholder="LastName"
                        style="border:1px solid #3441BB; height: 50%" required>
                    <label for="floatingLname" class="ps-4" style="color: #999999; font-size: 15px"> Apellidos</label>

                </div>

                <div class="form-floating col-sm-12 col-md-12 col-lg-12 mb-2">

                    <input type="tel" class="form-control  rounded-3" id="floatingPhone" placeholder="Teléfono"
                        style="border:1px solid #3441BB; height: 50%">
                    <label for="floatingPhone" class="ps-4" style="color: #999999; font-size: 15px"> Teléfono</label>

                </div>

                <div class="form-floating col-sm-12 col-md-12 col-lg-12 mb-2">

                    <input type="text" class="form-control  rounded-3" id="floatingDirecc" placeholder="Dirección"
                        style="border:1px solid #3441BB; height: 50%">
                    <label for="floatingDirecc" class="ps-4" style="color: #999999; font-size: 15px">Dirección</label>

                </div>

                <div class="w-100"></div>
                <!--ruptura de fila-->

                <div class="form-group">

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <button type="submit" class="btn btn-primary" style="background-color: #3441BB">Guardar
                            información</button>
                    </div>

                </div>
            </div>

        </div>
        <!--termina Formulario-->

        <div>
            <footer>Poner footer aca </footer>
        </div>

    </div>

@endsection
