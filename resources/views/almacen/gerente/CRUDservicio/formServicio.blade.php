@extends('layouts.perfil1')
@section('contenido')
<div class="clearfix"></div>
<br><br>
<div class="container-sm my-4 " id="form">
  <!-- Content here -->
  <form class="row g-3 p-4 " action="{{route('altaServicio')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @error('record')
        
    @enderror
    <div class="col-md-6">
      <label for="nombre_servicio"  class="form-label">Nombre de servicio</label>
        <input type="text" class="form-control" name="nombre_serv"  required>

      <label for="inputZip" class="form-label">Costo</label>
      <div class="input-group mb-3">
        <span class="input-group-text">$</span>
            <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="costo"  required>
        <span class="input-group-text">.00</span>
      </div>

    </div>
    <div class="col-md-6 " id="img">
      <label for="formFile" class="form-label">Imagen del servicio</label>
             <input class="form-control" type="file" name="img_ser" required>
    </div>
    <div class="col-12">
      <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion" required ></textarea>
    </div>
    <div class="col-md-3">
      <label for="exampleFormControlTextarea1" class="form-label">Descuento*</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="descuento" placeholder="%" ></textarea>
      
    </div>
    <div class="col-md-3">
      <label for="nombre_servicio"  class="form-label">Estatus</label>
      <select class="form-select" aria-label="Default select example" name="estatus" required>
        <option value="D">Disponible</option>
        <option value="N">No disponible</option>
      </select>
      {{-- <input type="text" class="form-control" name="estatus" placeholder="D disponible/N no disponible" required > --}}
    </div>
    
        @if($errors->any())
    <div class="alert alert-danger" role="alert">
        Datos incorrectos. Por favor, verifica los campos.
    </div>
@endif

    {{-- @error('nombre_serv'||'costo'||'img_ser'||'estatus'||'descripcion'||'descuento')
<div class="alert alert-danger" role="alert" >
Datos Incorrectos
</div>

@enderror --}}
    <div class="col-12 ">
      <div class="container text-center mt-3">
        <div class="row">
          <div class="col">
            <div class="d-grid gap-2 col-6 mx-auto">
              <a href="{{route('listaServicios')}}" class="btn btn-danger">Cancelar</a>
            </div>
          </div>
          <div class="col">
            <div class="d-grid gap-2 col-6 mx-auto">
              <button class="btn btn-success" type="submit">Enviar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>


</div>

@stop