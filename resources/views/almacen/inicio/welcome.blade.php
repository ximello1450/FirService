@extends('layouts.inicio')
@section('contenido')

    <section class="banner">
        <img src="src/banner_delgado.png" alt="">
        <!-- <button class="btn btn-dark btn-lg">Contactanos</button> -->
    </section>
    
  
    <section class="titulo">
        <h1>Algunos de nuestros servicios</h1>
    </section>
    <!--Galeria de servicios y paquetes-->
    <div class="clearfix"></div>

    <section class="paq">
        <aside class="tarjeta">
            <a href="paquetes.html"><img src="src/servicios/Montaje.jpg" alt="paquetebasico"></a>
         <article>
            <p>Montaje de llanta rin>16 </p>
            <p>-Precio $25.0-</p>
         </article>
        </aside>
        <aside class="tarjeta">
            <a href="paquetes.html"><img src="src/servicios/rectofocado.jpg" alt="paquetebasico"></a>
         <article>
            <p>Rectificado de disco </p>
            <p>-Precio $150.0-</p>
         </article>
        </aside>
        <aside class="tarjeta">
            <a href="paquetes.html"><img src="src/servicios/Cambio de aceite .jpg" alt="paquetebasico"></a>
         <article>
            <p>Cambio de aceite + filtro </p>
            <p>-Precio $600.0-</p>
         </article>
        </aside>
        <aside class="tarjeta">
            <a href="paquetes.html"><img src="src/servicios/Cambio de anticongelante .jpg" alt="paquetebasico"></a>
         <article>
            <p>Cambio de anticongelante verde </p>
            <p>-Precio $250.0-</p>
         </article>
        </aside>
    </section>

@stop