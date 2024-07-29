@extends('layouts.perfil1')
@section('contenido')
    <!-- Contenido -->
    <div class="container my-5" id="form">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="row g-3 p-4" method="POST" action="{{ route('CRUDpaquete.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
                <label for="nombre_paq" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre_paq" name="nombre_paq" required>
            </div>
            <div class="input-group col-mb-6">
                <span class="input-group-text">$</span>
                <input type="number" class="form-control" name="costo" aria-label="Amount (to the nearest dollar)" required>
                <span class="input-group-text">.00</span>
            </div>
            <div class="col-md-6">
                <label for="formFile" class="form-label">Imagen del paquete</label>
                <input class="form-control" type="file" id="formFile" name="img_paq" required>
            </div>
            <div class="col-md-6">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
            </div>
            
            <!-- Servicios dinámicos -->
            <div class="form-group">
        <label for="services">Servicios</label><br>
        @foreach($services as $servicie)
            <input type="checkbox" name="services[]" value="{{ $servicie->id_servicio }}" id="service{{ $servicie->id_servicio }}">
            <label for="service{{ $servicie->id_servicio }}">{{ $servicie->nombre_serv }}</label><br>
        @endforeach
    </div>
            <div class="col-md-12">
                <label for="descuento" class="form-label">Descuento</label>
                <input type="text" class="form-control" id="descuento" name="descuento">
            </div>
            <div class="col-md-12">
                <label for="personalizado" class="form-label">Personalizado</label>
                <input type="text" class="form-control" id="personalizado" name="personalizado">
            </div>
            <div class="col-md-3">
    <label for="estatus" class="form-label">Estatus</label>
    <select class="form-select" aria-label="Default select example" name="estatus" required>
        <option value="D">Disponible</option>
        <option value="N">No disponible</option>
    </select>
    <br>
    <br>
    <div class="col-10">
          <button type="submit" class="btn btn-success">Aceptar</button>
          <a href="{{route('CRUDpaquete.index')}}" class="btn btn-danger">Cancelar</a>
      </div>
            </div>
        </form>
   @endsection