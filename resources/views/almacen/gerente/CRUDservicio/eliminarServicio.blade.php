@extends('layouts.perfil1')
@section('contenido')
<form action="{{route('eliminarServicio',$servicios->id_servicio)}}" method="POST">
    @csrf
    @method('DELETE')
    
        
    <div class="container p-3 my-5 bg-dark text-light " style="border-radius: 10px;" >
        
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
                  
                </tr>
            </thead>
            <tbody class="text-light">
           
              <tr>
                    <td>{{$servicios->id_servicio}}</td>
                    <td>{{$servicios->nombre_serv}}</td>
                    <td>{{$servicios->descripcion}}</td>
                    <td>
                        <img src="{{asset($servicios->img_ser)}}" alt="{{$servicios->id_servicio}}" class="img-fluid" width="60px">
                    </td>
                    <td>${{$servicios->costo}}</td>
                    @if (($servicios->descuento)!=null)
                        <td>%{{$servicios->descuento}}</td>    
                        @else     
                        <td>Sin descuento</td>
                    @endif
              </tr>
              
            </tbody>
        </table>
    </div>
    <div class="alert alert-danger" role="alert">
        Seguro que quieres eliminar el servicio {{$servicios->nombre_serv}}?
      </div>
      <div class="text-center">
          <a href="{{route('listaServicios')}}"><button type="button" class="btn btn-success">Cancelar</button></a>
          <button type="submit" class="btn btn-danger">Confirmar</button>
      </div>
    </div>
</form>

@endsection