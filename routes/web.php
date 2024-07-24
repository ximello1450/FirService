<?php
//importar el controlador del objeto Servicio
use App\Http\Controllers\ServicioControlador;
use Illuminate\Support\Facades\Route;
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

//Rutas de crud Servicio
Route::get('/gerente/listaServicios',[ServicioControlador::class,'listaServicios'])->name('listaServicios');
Route::get('/gerente/FormServicios',[ServicioControlador::class,'formServicio'])->name('formServicios');
Route::post('/gerente/altaServicios',[ServicioControlador::class,'agregarServicio'])->name('altaServicio');
Route::get('/gerente/editarServicio/{id}',[ServicioControlador::class,'editarServicio'])->name('editarServicio');
Route::put('/gerente/actualizarServicio/{id}',[ServicioControlador::class,'actualizarServicio'])->name('actualizarServicio');
Route::delete('/gerente/eliminarServicio/{id}',[ServicioControlador::class,'eliminarServicio'])->name('eliminarServicio');