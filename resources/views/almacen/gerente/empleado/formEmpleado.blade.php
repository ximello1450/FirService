@extends('layouts.perfil1')
@section('contenido')

<div class="container">
    <h1>Nuevo Empleado</h1>

    <!-- Muestra mensajes de error de validación -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container p-3 my-5 bg-dark text-light" style="border-radius: 10px;">

    <form action="{{ route('altaEmpleado') }}" method="POST" class="row g-3 p-4">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <label for="nombre" class="form-label">Nombre(s)</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
            </div>
            <div class="col-md-4">
                <label for="app_paterno" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" id="app_paterno" name="app_paterno" value="{{ old('app_paterno') }}" required>
            </div>
            <div class="col-md-4">
                <label for="app_materno" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" id="app_materno" name="app_materno" value="{{ old('app_materno') }}" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="cargo" class="form-label">Cargo</label>
                <input type="text" class="form-control" id="cargo" name="cargo" value="{{ old('cargo') }}" required>
            </div>
            <div class="col-md-6">
                <label for="num_tel" class="form-label">Número Telefónico</label>
                <input type="tel" class="form-control" id="num_tel" name="num_tel" value="{{ old('num_tel') }}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="correo" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="correo" name="correo" value="{{ old('correo') }}" required>
            </div>
            <div class="col-md-3">
                <label for="horario_entrada" class="form-label">Horario de Entrada</label>
                <input type="time" class="form-control" id="horario_entrada" name="horario_entrada" value="{{ old('horario_entrada') }}" required>
            </div>
            <div class="col-md-3">
                <label for="horario_salida" class="form-label">Horario de Salida</label>
                <input type="time" class="form-control" id="horario_salida" name="horario_salida" value="{{ old('horario_salida') }}" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="dias_trabajo" class="form-label">Días de Trabajo</label>
                <div id="dias_trabajo">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="dias_trabajo[]" value="Lunes" id="lunes">
                        <label class="form-check-label" for="lunes">Lunes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="dias_trabajo[]" value="Martes" id="martes">
                        <label class="form-check-label" for="martes">Martes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="dias_trabajo[]" value="Miércoles" id="miercoles">
                        <label class="form-check-label" for="miercoles">Miércoles</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="dias_trabajo[]" value="Jueves" id="jueves">
                        <label class="form-check-label" for="jueves">Jueves</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="dias_trabajo[]" value="Viernes" id="viernes">
                        <label class="form-check-label" for="viernes">Viernes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="dias_trabajo[]" value="Sábado" id="sabado">
                        <label class="form-check-label" for="sabado">Sábado</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="dias_trabajo[]" value="Domingo" id="domingo">
                        <label class="form-check-label" for="domingo">Domingo</label>
                    </div>
                </div>
                
            </div>
            <div class="col-md-6">
                <label for="fecha_alta" class="form-label">Fecha Alta</label>
                <input type="date" class="form-control" id="fecha_alta" name="fecha_alta" required>
            <!-- Selección de Roles usando Checkboxes -->
            <div class="form-group">
                <label for="roles">Roles:</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="roles[]" value="1" id="rol1">
                    <label class="form-check-label" for="rol1">
                        Rol 1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="roles[]" value="2" id="rol2">
                    <label class="form-check-label" for="rol2">
                        Rol 2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="roles[]" value="3" id="rol3">
                    <label class="form-check-label" for="rol3">
                        Rol 3
                    </label>
                </div>
            </div>
                
                <label for="contra" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contra" name="contra" required>
            </div>





        </div>

        <div class="row mt-4">
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-success">Aceptar</button>
                <a href="{{ route('empleados.index') }}" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </form>
</div>
</div>

@endsection
