@extends('layouts.arrenline')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</div>
<div style="background-color: #FAFAFA" >
<div id="second">
    <div class="col-md-5 py-4 mx-auto">
        <div  class = "card card-primary py-4">
            <div class="col-md-12">
    <div class="myform form ">
          <div class="logo mb-3">
             <div class="col-md-12 text-center">
                <h1 >Crear tu cuenta en Arrenline</h1>
             </div>
          </div>
          <form action="#" name="registration">
             <div class="form-group">
                <label for="exampleInputEmail1">Primer Nombre</label>
                <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Ingresar primer nombre">
             </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Segundo Nombre</label>
                <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Ingresar segundo nombre">
             </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Primer Apellido</label>
                <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Ingresar primer apellido">
             </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Segundo Apellido</label>
                <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Ingresar segundo apellido">
             </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Numero de Cedula</label>
                <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Ingresar numero de cedula">
             </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Correo electronico</label>
                <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Ingresar correo electronido">
             </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Contraseña</label>
                <input type="text"  name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Ingresar Contraseña">
             </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Departamento</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
             </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Ciudad</label>
                <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Ingresar Ciudad">
             </div>
             <div class="col-md-12 text-center mb-3">
                <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Registrar</button>
             </div>
             <div class="col-md-12 ">
                <div class="form-group">
                   <p class="text-center"><a href="#" id="signin">¿Ya tienes una cuenta?</a></p>
                </div>
             </div>
            </div>
        </div>
              </div>
            </div>
          </form>
       </div>
</div>
</div>
@endsection
