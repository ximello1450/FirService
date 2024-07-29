<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="{{asset('src/logo.png')}}" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firestone</title>
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <link rel="stylesheet" href="{{asset('css/estilos.formcol.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos_lista.css')}}">
    <link rel="shortcut icon" href="{{ asset('imagenes friservice/logo.png') }}" type="image/x-icon">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6e1eb60fa0.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="{{route('admin.menu')}}" ><img src="{{asset('src/logo.png')}}" width="60px" height="60px" alt=""></a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{route('cotizacion')}}"><i class="fa-solid fa-clipboard-list" style="color: #ffffff;"></i> Cotización</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('listaClientes') }}"><i class="fa-solid fa-user-plus" style="color: #ffffff;"></i> Lista de clientes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href=" {{ route ('listaEmpleados') }} "><i class="fa-solid fa-user-tie" style="color: #ffffff;"></i> Lista de Empleados</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"  href="{{ route('listaServicios') }}"><i class="fa-solid fa-user-tie" style="color: #ffffff;"></i> Lista de Servicios</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('reporte')}}"><i class="fa-solid fa-clipboard-list" style="color: #ffffff;"></i>  Reporte </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('orden')}}"><i class="fa-solid fa-file-invoice-dollar" style="color: #ffffff;"></i>  Nota</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="ListaPaquetes.html"><i class="fa-solid fa-cubes" style="color: #ffffff;"></i> Lista paquetes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="ListaUsuarios.html"><i class="fa-solid fa-users" style="color: #ffffff;"></i> Lista Usuarios</a>
                  </li>
 
                </ul>
                <form class="d-flex" role="search">
                  <a  href="{{ route('inicio') }}"><button type="button" class="btn btn-danger">Cerrar sesion</button></a>
                </form>
              </div>
            </div>
          </nav>
</div><br>
@yield('contenido')
    <!--Pie de pegina-->
    <footer class="tabla">
        <table>
            <tr>
                <td>
                  
                    Taller de reparaciones Firestone <br>
                    Sucursal Cascabel 4a avenida, Esquina calle Cascabel
                    Col.Benito juarez, cp57000 Cdad.Nezahualcoyotl.Mex<i class="fa-solid fa-location-dot fa-fade fa-xl" style="color: #E0242A;;"></i><br>
                    Teléfono +52 55 1108 3925 <i class="fa-solid fa-phone fa-fade fa-lg" style="color: #E0242A;"></i>
                </td>
                <td>
            
                  &#169; Overclock 2024 </div>
                </td>
            </tr>
        </table>
    </footer>
    <script src="https://kit.fontawesome.com/6e1eb60fa0.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   

</html>
</body>
</html>
