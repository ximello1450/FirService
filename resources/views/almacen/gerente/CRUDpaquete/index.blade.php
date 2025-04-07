@extends('layouts.perfil1')
@section('contenido')
    <div class="container p-3 my-5 bg-dark text-light" style="border-radius: 10px;">
        <div class="d-flex justify-content-between">
            <h2>Paquetes <i class="fa-regular fa-paste" style="color: #ff0000;"></i></h2>
            <h2>Agregar <a href="{{ route('CRUDpaquete.create') }}"><i class="fa-solid fa-plus"></i></a></h2>
        </div>
        <div class="table-responsive">
            <table class="table text-light">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Img</th>
                        <th>Servicios</th>
                        <th>Descuento</th>
                        <th>Personalizado</th>
                        <th>Estatus</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($paquetes as $paquete)
                    <tr>
                        <td>{{ $paquete->id_paquete }}</td>
                        <td>{{ $paquete->nombre_paq }}</td>
                        <td>{{ $paquete->descripcion }}</td>
                        <td>${{ $paquete->costo }}</td>
                        <td>
                        @if($paquete->img_paq)
                        <img src="{{ asset('src/paquetes/'.$paquete->img_paq) }}" alt="{{ $paquete->nombre_paq }}" class="img-fluid" width="60px">

                            @else
                                Sin imagen
                            @endif
                        </td>
                        <td>
                            @foreach($paquete->servicios as $service)
                                {{ $service->nombre_serv }}@if (!$loop->last), @endif
                            @endforeach
                        </td>
                        <td>{{ $paquete->descuento }}</td>
                        <td>{{ $paquete->personalizado }}</td>
                        <td>{{ $paquete->estatus }}</td>
                        <td>
                            <a href="{{ route('CRUDpaquete.edit', $paquete->id_paquete) }}" class="btn btn-light"><i class="fa-solid fa-edit fa-sm"></i></a>
                            <form action="{{ route('CRUDpaquete.destroy', $paquete->id_paquete) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash fa-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este paquete?')"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection