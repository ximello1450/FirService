

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firestone</title>
    <link rel="shortcut icon" href="{{ asset('imagenes friservice/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/No MUEVAN.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="encabezado">
        <img src="{{ asset('src/logo.png') }}" alt="logo">
        <h1>FIRSERVICE</h1>
        <div class="clearfix"></div>
    </header>
    <!-- Menú de navegación -->
    <div class="encabezado">
        <hr>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('inicio') }}"><i class="fa-solid fa-house fa-fade" style="color: #ffffff;"></i>&nbsp;Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('servicios') }}"><i class="fa-solid fa-code fa-car" style="color: #ffffff;"></i> Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('paquetes') }}"><i class="fa-solid fa-cubes" style="color: #ffffff;"></i> Paquetes</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <a href="Iniciarsesion.html"><button type="button" class="btn btn-danger">Iniciar sesión</button></a>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    @yield('contenido')
    
    <!--Pie de pagina-->
    <footer class="tabla">
        <table>
            <tr>
                <td>
                    <div>
                        Taller de reparaciones Firestone <br>
                        Sucursal Cascabel 4a avenida, Esquina calle Cascabel
                        Col. Benito Juárez, CP 57000 Cdad. Nezahualcóyotl, Mex
                        <br>
                        Teléfono +52 55 1108 3925 
                    </div>
                </td>
                <td>
                    &#169; Overclock 2024
                </td>
            </tr>
        </table>
    </footer>
    <script src="https://kit.fontawesome.com/6e1eb60fa0.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>