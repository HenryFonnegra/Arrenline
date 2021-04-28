@extends('layouts.arrenline')
@section('content')

<section class="py-0 text-center container">
    <div class="row py-lg-2">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Publicaciones</h1>
      </div>
    </div>
  </section>

<div class="px-4">
<div class="card mb-3" style="max-width: 1350px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('lte/dist/img/VD/F11.jpg') }}" alt="..." width="400px" height="218px">
      </div>
      <div class="col-md-4">
        <div class="card-body">
          <h5 class="card-title"><a href="{{ route('Detalles') }}">Finca de 20 hectareas con buen pasto</a></h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-body">
          <p class="card-text">Fecha de publicacion 6/11/2020</p>
          <label for="inputEmail4" class="py-2">Estado del inmueble</label>
            <select name="" id="" class="form-control" style="width: 220px">
              <option value="">Disponible</option>
              <option value="">Vendido</option>
            </select>
            <div class="py-4">
              <a href="#" class="btn btn-primary card-link">Actualizar</a>
              <a href="#" class="btn btn-primary card-link">Eliminar</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>









@endsection
