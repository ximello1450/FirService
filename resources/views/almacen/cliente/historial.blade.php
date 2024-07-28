@extends('layouts.perfil3')
@section('contenido')
    
<div class="container p-3 my-5 bg-dark text-light " style="border-radius: 10px;" >
    <div class="d-flex justify-content-between">
        <h2>Historial <a href=""><i class="fa-regular fa-clipboard" style="color: #ff0000;"></i></a></h2>
    </div>
    <div class="table-responsive ">
        <table class="table  text-light ">
            <thead class="">
                <tr>
                    <th>No.</th>
                    <th>Fecha</th>
                    <th>Atendio</th>
                    <th>Descripccion</th>
                    <th>Pago</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   <td>1</td>
                   <td>20-05-2024</td>
                   <td>Rafael Rojas</td>
                   <td>Balanceo x llanta auto, paquete viajero</td>
                   <td>$649</td>
                   <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="fa-regular fa-eye" style="color: #ffffff;"></i></a></td>

               </tr>
               <tr>
                  <td>2</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="fa-regular fa-eye" style="color: #ffffff;"></i></a></td>
               </tr>
               <tr>
                  <td>3</td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="fa-regular fa-eye" style="color: #ffffff;"></i></a></td>
               </tr>
               <tr>
                  <td>4</td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="fa-regular fa-eye" style="color: #ffffff;"></i></a></td>
               </tr>
               <tr>
                  <td>5</td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="fa-regular fa-eye" style="color: #ffffff;"></i></a></td>
               </tr>
               <tr>
                  <td>6</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="fa-regular fa-eye" style="color: #ffffff;"></i></a></td>
               </tr>
           </tbody>
       </table>
   </div>
</div>

@endsection