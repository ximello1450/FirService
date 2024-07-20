<?php

use Illuminate\Support\Facades\Route;
//Routas del inicio, sin iniciar sesion ni nada
Route::get('/', function () {
    return view('almacen/inicio/welcome');
})->name('inicio');
Route::get('/servicios', function () {
    return view('almacen/inicio/servicios');
})->name('servicios');
Route::get('/paquetes', function () {
    return view('almacen/inicio/paquetes');
})->name('paquetes');
