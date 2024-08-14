@extends('layouts.perfil1')
@section('contenido')
   
<div class="container p-3 my-5 bg-dark text-light " style="border-radius: 10px;" >
    <div class="d-flex justify-content-between">
        <h2>Reporte de Ordenes de servicio <a href=""><i class="fa-regular fa-clipboard" style="color: #ff0000;"></i></a></h2>
    </div>
    <div class="table-responsive ">
        <table class="table  text-light ">
            <thead class="">
                <tr>
                    <th>No.</th>
                    <th>Fecha</th>
                    <th>Atendio</th>
                    <th>Descripccion</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   <td>1</td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>

               </tr>
               <tr>
                  <td>2</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
               </tr>
               <tr>
                  <td>3</td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
               </tr>
               <tr>
                  <td>4</td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
               </tr>
               <tr>
                  <td>5</td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
               </tr>
               <tr>
                  <td>6</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
               </tr>
           </tbody>
       </table>
    </div>
</div>
<div class="text-center">
 <a href="{{route('admin.menu')}}" class="btn btn-dark btn-lg" type="button" value="Enviar Pago" id="generar-orden">Enviar</a>

</div>
</div> 
@endsection