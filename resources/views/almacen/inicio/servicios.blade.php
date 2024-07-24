@extends('layouts.inicio')
@section('contenido')
<div class="clearfix"></div>
    <section class="titulo">
        <h1>Servicios</h1>
    </section>
    <!--Galeria de servicios y paquetes-->
    <div class="clearfix"></div>
    <section class="paq">
        <!--columna 1-->
        <aside class="tarjeta">
                <img src="src/servicios/Alineacion de eje delantero.jpg" alt="paquetebasico">
                <article>
                    <p>Alineacion eje delantero</p>
                    <p>-Precio $180.0-</p>
                </article>
                <button type="button" class="btn btn-outline-light">Detalles</button>
        </aside>
        <aside class="tarjeta">
                <img src="src/servicios/Alineacion y balaneceo de rin.jpg" alt="paquetemontaje">
                <article>
                    <p>Alineacion y balanceo auto>rin 17</p>
                    <p>-Precio $250.0-</p>
                </article>
                <button type="button" class="btn btn-outline-light">Detalles</button>
        </aside>
        <aside class="tarjeta">
                <img src="src/servicios/Balanceo x llanta .jpg" alt="paquetebasico">
                <article>
                    <p>Balanceo x llanta auto</p>
                    <p>-Precio $30.0-</p>
                </article>
                <button type="button" class="btn btn-outline-light">Detalles</button>
        </aside>
        <aside class="tarjeta">
                <img src="src/servicios/Balanceo x llanta camioneta .jpg" alt="paquetebasico">
                <article>
                    <p>Balanceo x llanta camioneta rin 17</p>
                    <p>-Precio $50.0-</p>
                </article>
                <button type="button" class="btn btn-outline-light">Detalles</button>
        </aside>
    </section>
        <!--columna 2-->
     <div class="clearfix"></div>
     <section class="paq">
        <!--columna 1-->
        <aside class="tarjeta">
                <img src="src/servicios/Montaje.jpg" alt="paquetebasico">
                <article>
                    <p>Montaje de  llanta>rin 16</p>
                    <p>-Precio $26.0-</p>
                </article>
                <button type="button" class="btn btn-outline-light">Detalles</button>
        </aside>
        <aside class="tarjeta">
                <img src="src/servicios/rectofocado.jpg" alt="paquetemontaje">
                <article>
                    <p>Rectificado por disco</p>
                    <p>-Precio $150.0-</p>
                </article>
                <button type="button" class="btn btn-outline-light">Detalles</button>
        </aside>
        <aside class="tarjeta">
                <img src="src/servicios/Cambio de aceite .jpg" alt="paquetebasico">
                <article>
                    <p>Cambio de aceite +filtro</p>
                    <p>-Precio $600.0-</p>
                </article>
                <button type="button" class="btn btn-outline-light">Detalles</button>
        </aside>
        <aside class="tarjeta">
                <img src="src/servicios/Cambio de anticongelante .jpg" alt="paquetebasico">
                <article>
                    <p>Cambio de anticongelante verde</p>
                    <p>-Precio $250.0-</p>
                </article>
                <button type="button" class="btn btn-outline-light">Detalles</button>
        </aside>
    </section>
  
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

    
    
@stop