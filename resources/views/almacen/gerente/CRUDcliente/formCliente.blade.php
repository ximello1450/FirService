@extends('layouts.perfil1')
@section('contenido')
<div class="clearfix"></div>
<br><br>
<div class="container-sm my-4 " id="form">
<form class="row g-3 p-4" action="{{ route('altaCliente') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">

      <!-- Formulario para registrar un nuevo cliente -->

        <div class="col">
            <label for="nombre_client" class="form-label">Nombre(s)</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>
        <div class="col">
            <label for="paterno_client" class="form-label">Apellido Paterno</label>
            <input class="form-control" type="text" name="app_paterno" required>
        </div>
        <div class="col">
            <label for="materno_client" class="form-label">Apellido Materno</label>
            <input type="text" class="form-control" name="app_materno" required>
        </div>
    </div>
    <div class="col-md-6">
        <label for="numerotel_client" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="contra">
    </div>
    <div class="col-md-6">
        <label for="correo_client" class="form-label">Correo Electrónico</label>
        <input type="email" class="form-control" name="correo">
    </div>
    <div class="col-md-6">
        <label for="fechaN_client" class="form-label">Fecha de Alta</label>
        <input type="date" class="form-control" name="fecha_alta" required>
    </div>
    <div class="form-group">
    <label for="id_rol">Rol</label>
    <select name="id_rol" id="id_rol" class="form-control" required>
        {{-- @foreach($roles as $rol)
            <option value="{{ $rol->id_rol }}" {{ old('id_rol', $defaultRoleId) == $rol->id_rol ? 'selected' : '' }}>
                {{ $rol->nombre }}
            </option>
        @endforeach --}}
        <option value="1" selected>
            Cliente
        </option>
    </select>
</div>

   <!-- Botones de acción -->
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-success">Aceptar</button>
        <a href="{{ route('listaClientes') }}" class="btn btn-danger">Cancelar</a>
    </div>
</form>
</div>
@stop
