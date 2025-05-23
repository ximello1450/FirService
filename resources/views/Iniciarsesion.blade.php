<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="src/logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firestone</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos_sesion.css')}}">
    <script src="https://kit.fontawesome.com/6e1eb60fa0.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="encabezado text-center py-3 bg-dark text-white">
        <div class="encabezado-container">
            <a href="{{route('inicio')}}"><img src="src/logo.png" alt="logo" class="img-fluid encabezado-logo"></a>
            <h1 class="encabezado-titulo">FIRSERVICE</h1>
        </div>
    </header>
    <div class="clearfix"></div>

    <!--Formulario iniciar sesion-->

    <!--Ximello ya no le muevaaas-->
    <div class="container mt-5 formulario-container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card formulario-card">
                    <div class="card-header text-center bg-custom text-white">
                        <b>Iniciar Sesión</b>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('loginchk') }}" method="POST">
                        @csrf

                            <div class="form-group">
                                <label for="correo">Correo</label>
                                <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" value="{{ old('email') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="contra">Contraseña</label>
                                <input type="password" class="form-control" id="contra" name="contra" placeholder="Contraseña" required>
                            </div>
                            <button type="submit" class="btn btn-custom btn-block text-white">Iniciar Sesión</button>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<!--Recordatorio de color -->

    <!--Pie de pagina-->
    <footer >
        <table>
            <tr>
                <td>
                    Taller de reparaciones Firestone <br>
                    Sucursal Cascabel 4a avenida, Esquina calle Cascabel
                    Col.Benito juarez, cp57000 Cdad.Nezahualcoyotl.Mex<br>
                    Teléfono +52 55 1108 3925 
                </td>
                <td>
                  &#169; Overclock 2424
                </td>
            </tr>
        </table>
    </footer>

   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
