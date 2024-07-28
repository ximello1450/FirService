@extends('layouts.perfil2')
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
                    <img src="{{{asset('src/firestone_logo.jpg')}}}" class="card-img-top" alt="..." style="width: 40%;">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title ">¡Hola empleado!</h5>
                        <p class="card-text ">En tu perfil puedes las ordenes pendientes con la facilidad de indicar con un boton que el servicio esta hecho</p>
                        <a href="{{route('ordenesEmpleado')}}" class="btn btn-danger m-2">&nbsp;&nbsp;&nbsp;Ver ordenes&nbsp;&nbsp;&nbsp;</a>
                        
                    </div>
    
            </div>
            <div class="col p-5 text-center"  >
                    <div class="card text-center ">
                        <img src="{{asset('src/logo.png')}}"  alt="..." style="width: 30%;margin: auto;">
                    <p class="card-text" >  
                        <h4 ><b>Empleado</b> Jose_Lopez</h4></p>
                    </div> 
            </div>
        </div>
    </div>
</div>

@endsection