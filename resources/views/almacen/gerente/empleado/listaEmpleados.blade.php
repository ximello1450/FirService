@extends('layouts.perfil1')
@section('contenido')

<div class="container">
    <!-- Muestra mensajes de éxito o error -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    

    <div class="container p-3 my-5 bg-dark text-light" style="border-radius: 10px;">
        <!-- Botón para agregar nuevo empleado -->
        <div class="d-flex justify-content-between">
            <h2>Empleado <a href=""><i class="fa-regular fa-paste" style="color: #ff0000;"></i></a></h2>
            <h2>Agregar <a href="{{ route('formEmpleado') }}"><i class="fa-solid fa-plus"></i></a></h2>
        </div>
        <div class="table-responsive">
            <table class="table text-light">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Cargo</th>
                        <th>Fecha de Alta</th>
                        <th>Hora de Entrada</th>
                        <th>Hora de Salida</th>
                        <th>Días de Trabajo</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empleados as $empleado)
                    <tr>

                        <td>{{ $empleado->id_empleado }}</td>
                        <td>{{ $empleado->nombre }}</td>
                        <td>{{ $empleado->app_paterno }}</td>
                        <td>{{ $empleado->app_materno }}</td>
                        <td>{{ $empleado->cargo }}</td>
                        <td>{{ $empleado->fecha_alta }}</td>
                        <td>{{ $empleado->horario_entrada }}</td>
                        <td>{{ $empleado->horario_salida }}</td>
                        <td>{{ $empleado->dias_trabajo }}</td>
                        <td>{{ $empleado->num_tel }}</td>
                        <td>{{ $empleado->correo }}</td>
                        <td>
                            @foreach ($empleado->roles as $rol) 
                              {{ $rol->nombre }} <br>
                            @endforeach
                        </td>
                        <td>
                        <div class="d-flex justify-content-center align-items-center">
    <a href="{{ route('editarEmpleado', $empleado->id_empleado) }}" class="btn btn-primary btn-sm me-2">
        <i class="fa-solid fa-pen-to-square"></i>
    </a>
    <form action="{{ route('eliminarEmpleado', $empleado->id_empleado) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este empleado?')">
            <i class="fa-solid fa-trash"></i>
        </button>
    </form>
</div>

                        </td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
