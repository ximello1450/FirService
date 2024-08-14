@extends('layouts.perfil3')
@section('contenido')
<div class="container md-5">
    <!-- Contenido de la página -->
     <div class="card">
        <div class="card-header">
            <h4>¡Bienvenido de nuevo!</h4>
        </div>
        <div class="row "  >
            <div class="col"  >
                
                    <div class="card-body text-center">
                    <img src="src/firestone_logo.jpg" class="card-img-top" alt="..." style="width: 40%;">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title ">¡Hola cliente!</h5>
                        <p class="card-text ">En tu perfil puedes disfrutar de diversos apartados donde puedes revisar el estatus de tu coche además de checar el historial en la sucursal</p>
                        <a href="{{route('historialCliente')}}" class="btn btn-danger m-2">&nbsp;&nbsp;&nbsp;Historial&nbsp;&nbsp;&nbsp;</a>
                        <a href="{{route('ordenCliente')}}" class="btn btn-dark">Nota actual</a>
                    </div>
    
            </div>
            <div class="col p-5 text-center"  >
                    <div class="card text-center ">
                        <img src="src/logo.png"  alt="..." style="width: 30%;margin: auto;">
                    <p class="card-text" >  
                        <h4 ><b>Cliente</b></h4></p>
                    </div> 
            </div>
        </div>
    </div>
</div>
@endsection