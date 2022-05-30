<?php

use Illuminate\Support\Facades\Route;
//MOSTRAR TABLAS
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DesarrolladoresController;
use App\Http\Controllers\ProyectosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TareasController;
use App\Http\Controllers\EventosController;
//LLENAR DESPLEGABLES
use App\Http\Controllers\AgregarProyectoController;
use App\Http\Controllers\AgregarTareasController;
use App\Http\Controllers\AgregarEventosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('home');
//RUTAS PARA ACTUALIZAR
Route::get('/agregarCliente', function () {
    return view('agregarCliente');
});
Route::get('/desarrolladores',[DesarrolladoresController::class, 'index'])->name('desarrolladores');

Route::get('/agregarDesarrollador', function () {
    return view('agregarDesarrollador');
});
Route::get('/proyectos', [ProyectosController::class, 'index'])->name('proyectos');

Route::get('agregarProyecto',[AgregarProyectoController::class, 'index'])->name('agregarProyecto');
Route::get('/agregarEvento',[AgregarEventosController::class, 'index'])->name('agregarEvento');
Route::get('/agregarTarea',[AgregarTareasController::class, 'index'])->name('agregarTarea');
//AGREGAR DATOS A LA BD
Route::post('/clientes',[ClientesController::class,'store'])->name('clientes.store');
Route::post('/desarrolladores',[DesarrolladoresController::class,'store'])->name('desarrolladores.store');
Route::post('/proyectos',[ProyectosController::class,'store'])->name('proyectos.store');
Route::post('/tareas',[TareasController::class,'store'])->name('tareas.store');
Route::post('/eventos',[EventosController::class,'store'])->name('eventos.store');
//ELIMINAR DATOS
Route::delete('/destroy/{id}', [ClientesController::class, 'destroy'])->name('clientes.destroy');
Route::delete('/tareasDestroy/{id}',[TareasController::class,'destroy'])->name('tareas.destroy');
Route::delete('/eventosDestroy/{id}',[EventosController::class,'destroy'])->name('eventos.destroy');
Route::delete('/desarrolladoresDestroy/{id}',[DesarrolladoresController::class,'destroy'])->name('desarrolladores.destroy');
Route::delete('/proyectosDestroy/{id}',[ProyectosController::class,'destroy'])->name('proyectos.destroy');
//EDITAR DATOS}
Route::get('/actualizarCliente/{id}',[ClientesController::class,'edit'])->name('clientes.edit');
Route::put('/update/{id}',[ClientesController::class,'update'])->name('clientes.update');

Route::get('/actualizarDesarrollador/{id}',[DesarrolladoresController::class,'edit'])->name('desarrolladores.edit');
Route::put('/updateDev/{id}',[DesarrolladoresController::class,'update'])->name('desarrolladores.update');

Route::get('/actualizarProyecto/{id}',[ProyectosController::class,'edit'])->name('proyectos.edit');
Route::put('/updateProy/{id}',[ProyectosController::class,'update'])->name('proyectos.update');

Route::get('/actualizarTareas/{id}',[TareasController::class,'edit'])->name('tareas.edit');
Route::put('/updateTask/{id}',[TareasController::class,'update'])->name('tareas.update');

Route::get('/actualizarEventos/{id}',[EventosController::class,'edit'])->name('eventos.edit');
Route::put('/updateEvent/{id}',[EventosController::class,'update'])->name('eventos.update');


/*Route::get('/actualizarCliente', function () {
    return view('actualizarCliente');
})->name('clientes.edit');*/
