@extends('layouts.perfil1')
@section('contenido')
<div class="clearfix"></div>
<br><br>

<div class="container-sm my-4 " id="form">
  
  <form class="row g-3 p-4" action="{{ route('actualizarCliente', $cliente->id_clientes) }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
     <!-- Campos del formulario para la info del cliente -->
    <div class="row">
        <div class="col">
            <label for="nombre_client" class="form-label">Nombre(s)</label>
            <input type="text" class="form-control" name="nombre" required value="{{ $cliente->nombre }}">
        </div>
        <div class="col">
            <label for="paterno_client" class="form-label">Apellido Paterno</label>
            <input class="form-control" type="text" name="app_paterno" required value="{{ $cliente->app_paterno }}">
        </div>
        <div class="col">
            <label for="materno_client" class="form-label">Apellido Materno</label>
            <input type="text" class="form-control" name="app_materno" required value="{{ $cliente->app_materno }}">
        </div>
    </div>

    <!-- Campo para la contraseña y correo -->
    <div class="col-md-6">
        <label for="numerotel_client" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="contra" value="{{ $cliente->contra }}">
    </div>
    <div class="col-md-6">
        <label for="correo_client" class="form-label">Correo Electrónico</label>
        <input type="email" class="form-control" name="correo" value="{{ $cliente->correo }}">
    </div>

    <!-- Campo para la fechaA -->
    <div class="col-md-6">
        <label for="fechaN_client" class="form-label">Fecha de Alta</label>
        <input type="date" class="form-control" name="fecha_alta" required value="{{ $cliente->fecha_alta }}">
    </div>

   <!-- Campo para seleccionar el rol del cliente -->
    <div class="form-group">
        <label for="id_rol">Rol</label>
        <select name="id_rol" id="id_rol" class="form-control" required>

          <!--Se usa para iterar sobre una colección de objetos $roles -->
            @foreach($roles as $rol)
             <!-- Opciones del select para los roles -->
                <option value="{{ $rol->id_rol }}" {{ old('id_rol', $cliente->id_rol) == $rol->id_rol ? 'selected' : '' }}>
                    {{ $rol->nombre }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('listaClientes') }}" class="btn btn-danger">Cancelar</a>
    </div>
  </form>
</div>
@stop
