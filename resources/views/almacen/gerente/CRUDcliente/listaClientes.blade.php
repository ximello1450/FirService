@extends('layouts.perfil1')

@section('contenido')
<div class="clearfix"></div>
    
<div class="container p-3 my-5 bg-dark text-light " style="border-radius: 10px;">
    <div class="d-flex justify-content-between">
        <h2>Cliente <a href=""><i class="fa-regular fa-paste" style="color: #ff0000;"></i></a></h2>
        <h2>Agregar <a href="{{ route('formCliente') }}"><i class="fa-solid fa-plus"></i></a></h2>
    </div>
    <div class="table-responsive">
        <table class="table text-light">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Rol</th>
                    <th>Nombre(s)</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Fecha de alta</th>
                    <th>Correo Electronico</th>
                    <th colspan="2">Operaciones</th>
                </tr>
            </thead>
            <tbody class="text-light">
                <!-- Iteración sobre los clientes para mostrarlos en la tabla -->
                @foreach ($clientes as $item)
                <tr>
                <td>{{ $item->id_clientes }}</td>
                <td>{{ $item->rol->nombre }}</td> <!-- Regresara el nombre del id-1 que en este caso es clienyte -->
                <td>{{ $item->nombre }}</td>
                <td>{{ $item->app_paterno }}</td>
                <td>{{ $item->app_materno }}</td>
                <td>{{ $item->fecha_alta }}</td>
                <td>{{ $item->correo }}</td>
                    <td>
                        <form action="{{ route('editarCliente', $item->id_clientes) }}" method="GET">
                            <button class="btn btn-light"><i class="fa-solid fa-edit fa-sm"></i></button>
                        </form>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id_clientes }}"><i class="fa-solid fa-trash fa-sm"></i></button>

                        {{-- VENTANA FLOTANTE PARA LA CONFIRMACION DE LA ELIMINACION DEL CLIENTE --}}
                        <div class="modal fade" id="deleteModal{{ $item->id_clientes }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $item->id_clientes }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" style="color: gray" id="deleteModalLabel{{ $item->id_clientes }}">Eliminar el cliente</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="color: gray">
                                        ¿Quieres eliminar el cliente {{ $item->nombre }}?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <form action="{{ route('eliminarCliente', $item->id_clientes) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary">Confirmar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="clearfix"></div>
@stop
