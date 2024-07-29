<?php
//importar el controlador del objeto Servicio
use App\Http\Controllers\ServicioControlador;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteControlador;
//Routas del inicio, sin iniciar sesion ni nada
Route::get('/', function () {
    return view('almacen/inicio/welcome');
})->name('inicio');
Route::get('/servicios',[ServicioControlador::class,'listaServiciosInicio'])->name('servicios');

Route::get('/paquetes', function () {
    return view('almacen/inicio/paquetes');
})->name('paquetes');
Route::get('/iniciar-sesion', function () {
    return view('iniciarsesion');
})->name('iniciarsesion');

//*Ruta del inicio del perfil del gerente o admin
Route::get('/gerente', function () {
    return view('almacen/gerente/inicioGerente');
})->name('admin.menu');

//Cotizacion
Route::get('/gerente/cotizacion', function () {
    return view('almacen/gerente/cotizacion');
})->name('cotizacion');
//reporte
Route::get('/gerente/reporte', function () {
    return view('almacen/gerente/reporte');
})->name('reporte');
//Orden
Route::get('/gerente/orden', function () {
    return view('almacen/gerente/orden');
})->name('orden');


//Rutas de crud Servicio
Route::get('/gerente/listaServicios',[ServicioControlador::class,'listaServicios'])->name('listaServicios');
Route::get('/gerente/FormServicios',[ServicioControlador::class,'formServicio'])->name('formServicios');
Route::post('/gerente/altaServicios',[ServicioControlador::class,'agregarServicio'])->name('altaServicio');
Route::get('/gerente/editarServicio/{id}',[ServicioControlador::class,'editarServicio'])->name('editarServicio');
Route::put('/gerente/actualizarServicio/{id}',[ServicioControlador::class,'actualizarServicio'])->name('actualizarServicio');
Route::delete('/gerente/eliminarServicio/{id}',[ServicioControlador::class,'eliminarServicio'])->name('eliminarServicio');
Route::get('/gerente/confirmar/{id}',[ServicioControlador::class,'confirmar'])->name('confirmar');

//*Ruta del inicio del perfil del empleado
Route::get('/empleado', function () {
    return view('almacen/empleado/inicioEmpleado');
})->name('empleado.menu');
Route::get('/empleado/ordenes', function () {
    return view('almacen/empleado/listaOrdEmpleado');
})->name('ordenesEmpleado');


//*Ruta del inicio del perfil del cliente
Route::get('/cliente', function () {
    return view('almacen/cliente/inicioCliente');
})->name('cliente.menu');


Route::get('/cliente/historial', function () {
    return view('almacen/cliente/historial');
})->name('historialCliente');

Route::get('/cliente/ordenCliente', function () {
    return view('almacen/cliente/ordenCliente');
})->name('ordenCliente');

//Rutas de crud Cliente
Route::get('/gerente/listaClientes', [ClienteControlador::class, 'listaClientes'])->name('listaClientes');
Route::get('/gerente/FormCliente', [ClienteControlador::class, 'formCliente'])->name('formCliente');
Route::post('/gerente/altaClientes', [ClienteControlador::class, 'agregarCliente'])->name('altaCliente');
Route::get('/gerente/editar/{id}', [ClienteControlador::class, 'editarCliente'])->name('editarCliente');
Route::put('/gerente/actualizarCliente/{id}', [ClienteControlador::class, 'actualizarCliente'])->name('actualizarCliente');
Route::delete('/gerente/eliminarCliente/{id}', [ClienteControlador::class, 'eliminarCliente'])->name('eliminarCliente');
