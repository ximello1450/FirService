@extends('layouts.inicio')
@section('contenido')
<div class="clearfix"></div>
    <section class="titulo">
        <h1>Servicios</h1>
    </section>
    <!--Galeria de servicios y paquetes-->
    <div class="clearfix"></div>
            @php
                $counter = 0;
            @endphp
            @foreach ($servicios as $item)
                @if ($counter % 4 === 0)
                    <!-- Comienza una nueva sección -->
                    <div class="paq">
                @endif

                <aside class="tarjeta">
                        <img src="{{asset($item->img_ser)}}" alt="{{$item->id_servicio}}" class="img-fluid" width="60px">
                   <article>
                        <p>{{$item->nombre_serv}}  </p> 
                        <p>-Precio ${{$item->costo}}-</p>
                    </article>
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#exampleModal" >Detalles</button>
                    
                    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" style="color: gray" id="exampleModalLabel">{{$item->nombre_serv}}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>  
                        <div class="modal-body" style="color: gray">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                        </div>
                    </div>
                    </div> --}}
                </aside>
                
                @php
                    $counter++;
                @endphp

                @if ($counter % 4 === 0)
                    <!-- Cierra la sección actual -->
                    </div>
                @endif
            @endforeach


                </div>
                
<div class="clearfix"></div>


        <!--columna 2-->
{{-- 
        
  
    <div class="clearfix"></div>
    <section class="paq">
        <!--columna 1-->
        <aside class="tarjeta">
                <img src="src/servicios/Cambio de naticongelante r.jpg" alt="paquetebasico">
                <article>
                    <p>Cambio de anticongelante rosa</p>
                    <p>-Precio $450.0-</p>
                </article>
                <button type="button" class="btn btn-outline-light">Detalles</button>
        </aside>
        <aside class="tarjeta">
                <img src="src/servicios/Montaje de amortiguador.jpg" alt="paquetemontaje">
                <article>
                    <p>Montaje de amortiguador struts</p>
                    <p>-Precio $200.0-</p>
                </article>
                <button type="button" class="btn btn-outline-light">Detalles</button>
        </aside>
        <aside class="tarjeta">
                <img src="src/servicios/Carga de nitrogeno x llanta .jpg" alt="paquetebasico">
                <article>
                    <p>Carga de nitrogeno x llanta  </p>
                    <p>-Precio $50.0-</p>
                </article>
                <button type="button" class="btn btn-outline-light">Detalles</button>
        </aside>
        @foreach ($servicios as $item)
        <aside class="tarjeta">
                <img src="{{asset($item->img_ser)}}" alt="{{$item->id_servicio}}" class="img-fluid" width="60px">
           <article>
                <p>{{$item->nombre_serv}}  </p> 
                <p>-Precio ${{$item->costo}}-</p>
            </article>
            <button type="button" class="btn btn-outline-light">Detalles</button>
          </aside>
        @endforeach
        
    </section>
   
    <div class="clearfix"></div>

     --}}
    
@stop