{{-- !Falta hacer hacer ruta a esta tarjeta ademas de recuperar el nombre del empleado --}}

@extends('layouts.perfil1')
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
                                <h5 class="card-title ">¡Hola gerente!</h5>
                                <p class="card-text ">En tu perfil puedes disfrutar de diversos apartados donde puedes modificar y administrar distintos apartados de la sucursal</p>
                                <a href="{{route('cotizacion')}}" class="btn btn-danger m-2">&nbsp;&nbsp;&nbsp;Cotizar&nbsp;&nbsp;&nbsp;</a>
                                <a href="{{route('reporte')}}" class="btn btn-dark">Generar reporte</a>
                            </div>
            
                    </div>
                    <div class="col p-5 text-center"  >
                            <div class="card text-center ">
                                <img src="src/logo.png"  alt="..." style="width: 30%;margin: auto;">
                            <p class="card-text" >  
                                <h4 ><b>Gerente</b></p>
                            </div> 
                    </div>
                </div>
            </div>
        </div>
    @stop