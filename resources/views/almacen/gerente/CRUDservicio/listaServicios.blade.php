@extends('layouts.perfil1')
@section('contenido')
<div class="clearfix"></div>
    
        <div class="container p-3 my-5 bg-dark text-light " style="border-radius: 10px;" >
            <div class="d-flex justify-content-between">
                <h2>Servicios <a href=""><i class="fa-regular fa-paste" style="color: #ff0000;"></i></a></h2>
                <h2>Agregar <a href="{{route('formServicios')}}"><i class="fa-solid fa-plus"></i></a></h2>
            </div>
            <div class="table-responsive ">
                <table class="table text-light ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <td>Imagen</td>
                            <th>Costo</th>
                            <th>Descuento</th>
                            <th colspan="2">Operaciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-light">
                      @foreach ($servicios as $item)
                      <tr>
                            <td>{{$item->id_servicio}}</td>
                            <td>{{$item->nombre_serv}}</td>
                            <td>{{$item->descripcion}}</td>
                            <td>
                                <img src="{{asset($item->img_ser)}}" alt="{{$item->id_servicio}}" class="img-fluid" width="60px">
                            </td>
                            <td>${{$item->costo}}</td>
                            @if (($item->descuento)!=0)
                                <td>%{{$item->descuento}}</td>
                            @endif
                            <td>
                                <form action="{{route('editarServicio',$item->id_servicio)}}" method="GET">
                                    <button class="btn btn-light"><i class="fa-solid fa-edit fa-sm"></i></button>
                                </form>
                               
                            </td>
                            <td>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" ><i class="fa-solid fa-trash fa-sm"></i></button>

                            {{-- VENTANA FLOTANTE PARA LA CONFRIMACION DE LA ELIMINACION DEL SERVICIO --}}
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" style="color: gray" id="exampleModalLabel">Eliminar el servicio</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>  
                                    <div class="modal-body" style="color: gray">
                                        Quieres el servicio {{$item->nombre_serv}}?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <form action="{{route('eliminarServicio',$item->id_servicio)}}" method="POST">
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