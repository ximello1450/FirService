@extends('layouts.perfil1')
@section('contenido')

    <div class="container p-3 my-5 bg-dark text-light" style="border-radius: 10px;">
        <h2>Editar Paquete <i class="fa-regular fa-paste" style="color: #ff0000;"></i></h2>
        <form class="row g-3 p-4" method="POST" action="{{ route('CRUDpaquete.update', $paquete->id_paquete) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-12">
                <label for="nombre_paq" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre_paq" name="nombre_paq" value="{{ $paquete->nombre_paq }}" required>
            </div>
            <div class="input-group col-mb-6">
                <span class="input-group-text">$</span>
                <input type="number" class="form-control" name="costo" value="{{ $paquete->costo }}" aria-label="Amount (to the nearest dollar)" required>
                <span class="input-group-text">.00</span>
            </div>
            <div class="col-md-6">
                <label for="formFile" class="form-label">Imagen del paquete</label>
                <input class="form-control" type="file" id="formFile" name="img_paq">
            </div>
            <div class="col-md-6">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required>{{ $paquete->descripcion }}</textarea>
            </div>
            <div class="form-group">
        <label for="services">Servicios:</label><br>
        @foreach($servicios as $servicio)
            <input type="checkbox" name="services[]" value="{{ $servicio->id_servicio }}" id="service{{ $servicio->id_servicio }}"
                @if($paquete->servicios->contains($servicio->id_servicio)) checked @endif>
            <label for="service{{ $servicio->id_servicio }}">{{ $servicio->nombre_serv }}</label><br>
        @endforeach
    </div>

            <div class="col-md-4">
                <label for="descuento" class="form-label">Descuento</label>
                <input type="number" class="form-control" id="descuento" name="descuento" value="{{ $paquete->descuento }}">
            </div>
            <div class="col-md-4">
                <label for="personalizado" class="form-label">Personalizado</label>
                <input type="text" class="form-control" id="personalizado" name="personalizado" value="{{ $paquete->personalizado }}">
            </div>
            <div class="col-md-3">
    <label for="estatus" class="form-label">Estatus</label>
    <select class="form-select" aria-label="Default select example" name="estatus" required>
        <option value="D">Disponible</option>
        <option value="N">No disponible</option>
    </select>
</div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>

   @endsection