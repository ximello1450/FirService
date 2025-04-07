@extends('layouts.perfil2')
@section('contenido')
    
<div class="container p-3 my-5 bg-dark text-light " style="border-radius: 10px;" >
    <div class="d-flex justify-content-between">
        <h2>Ordenes pendientes <a href=""><i class="fa-regular fa-paste" style="color: #ff0000;"></i></a></h2>
     
    </div>
    <div class="table-responsive ">
        <table class="table text-light ">
            <thead class="">
                <tr>
                    <th>No.</th>
                    <th>Fecha</th>
                    <th>Cliente</th>
                    <th>Celular</th>
                  
                    <th>Correo electronico</th>
                    <th>Estado</th>
                    <th>Total</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>20-05-2024</td>
                    <td>Arturo Ramos</td>
                    <td>*</td>
                    <td>arturoramo@gmail.com</td>
                    <td><a href="#"><i class="fa-solid fa-xmark fa-sm"></i></a></td>
                    <td>$649</td>
                    <td>
                        <a href="#"><i class="fa-solid fa-check fa-sm"></i> Terminar</a>
                        
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                       
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                       
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                       
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection