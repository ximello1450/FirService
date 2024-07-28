@extends('layouts.perfil1')
@section('contenido')
    
<div class="titulolist">
    <h2>Cotizacion<a href=""><i class="fa-solid fa-clipboard-check" style="color: #ff0000;"></i></a></h2>
</div>

<div class="listaonjectos">
    <form action="">
    <table>
        <tr> 
        <th>Fecha</th>
        <th>Cliente</th>
        <th>Celular</th>
        <th>Correo</th>
    </tr>
    <tr>
        <td>
            <input type="date" name="fecha" required>
        </td>
            <td>
                <input type="text" name="nombreC" required>
            </td>
            <td>
                <input type="tel" name="telefono" id="">
            </td>
            <td>
                <input type="email" name="email">
            </td>
        </a>
    </a>
        </td>
        </tr>
        
    <table>
        <br>
            <th>Cantidad</th>
            <th>Concepto</th>
            <th>Precio</th>
            


        </tr>
        <tr>
            <td id="precio">
                <input type="number" name="cantidad" >
            </td>
            <td>
                <input type="text" name="concepto" id="">
            </td>
            <td id="precio">
                $<input type="number" name="" id="">
            </td> 
        </tr>
        <tr>
            <td id="precio">
                <input type="number" name="cantidad" >
            </td>
            <td>
                <input type="text" name="concepto" id="">
            </td>
            <td id="precio">
                $<input type="number" name="" id="">
            </td> 
           
        </tr>
        <tr>
            <td id="precio">
                <input type="number" name="cantidad" >
            </td>
            <td>
                <input type="text" name="concepto" id="">
            </td>
            <td id="precio">
                $<input type="number" name="" id="">
            </td> 
        </tr>
        <tr>
            <td id="precio">
                <input type="number" name="cantidad" >
            </td>
            <td>
                <input type="text" name="concepto" id="">
            </td>
            <td id="precio">
                $<input type="number" name="" id="">
            </td> 
        </tr>
    
    <tr>
        <td id="precio">
            <input type="number" name="cantidad" >
        </td>
        <td>
            <input type="text" name="concepto" id="">
        </td>
        <td id="precio">
            $<input type="number" name="" id="">
        </td> 
    </tr>
    <tr>
        <td id="precio">
            <input type="number" name="cantidad" >
        </td>
        <td>
            <input type="text" name="concepto" id="">
        </td>
        <td id="precio">
            $<input type="number" name="" id="">
        </td> 
    </tr>
    <tr>
        <td id="precio">
            <input type="number" name="cantidad" >
        </td>
        <td>
            <input type="text" name="concepto" id="">
        </td>
        <td id="precio">
            $<input type="number" name="" id="">
        </td> 
    </tr>
    <tr>
        <td id="precio">
            <input type="number" name="cantidad" >
        </td>
        <td>
            <input type="text" name="concepto" id="">
        </td>
        <td id="precio">
            $<input type="number" name="" id="">
        </td> 
    </tr>
    <tr>
        <td id="precio">
            <input type="number" name="cantidad" >
        </td>
        <td>
            <input type="text" name="concepto" id="">
        </td>
        <td id="precio">
            $<input type="number" name="" id="">
        </td> 
    </tr>
    <tr>
        <td id="precio">
            <input type="number" name="cantidad" >
        </td>
        <td>
            <input type="text" name="concepto" id="">
        </td>
        <td id="precio">
            $<input type="number" name="" id="">
        </td>   
    </tr>
        <table>
            <br>
            <tr >
                
                
            
                <td id="total">
                    $<input type="number" name="total" id="total">
                </td>
                <th id="total">Total</th>
            </tr>
    </table>
</table>
</table>
<br>
<table>
    <tr >
        <th >Atendio:</th>
        <td>Gerente Rafael Rojas</td>
        
    </table>
    <br><br>
    <div class="botones-container">
        <a href="{{route('admin.menu')}}"><input type="button" value="Imprimir" id="enviar"></a>
        <a href="{{route('admin.menu')}}"><input type="button" value="Cancelar" id="enviar"></a>
        <input type="reset" value="Limpiar" id="enviar">
    </div>
    <br>
    <div class="botones-container">
        <a href="{{route('orden')}}"><input type="button" value="Generar orden de servicio" id="generar-orden"></a>
    </div>
</form>
</div>
</div>
@endsection