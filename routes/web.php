<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');



});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
            return view('dashboard');
    })->name('dashboard');

    // Personal
    Route::get('/personal', [UserController::class, 'inicio'])->name('personal.inicio');
    Route::get('personal/editar/{id}', [UserController::class, 'editar_pers'])->name('personal.editar');
    Route::post('personal/actualizar/{id_personal}', [UserController::class, 'actualizar_pers'])->name('personal.actualizar');
    Route::delete('personal/eliminar/{id_personal}', [UserController::class, 'eliminar_pers'])->name('personal.eliminar');
    Route::get('personal/crear', [UserController::class, 'crear_pers'])->name('personal.crear');
    Route::post('personal/guardar', [UserController::class, 'guardar_pers'])->name('personal.guardar');
    

    // Proveedor
    Route::get('/proveedor', [UserController::class, 'inicio_prov'])->name('proveedor.inicio');
    Route::get('proveedor/editar/{id}', [UserController::class, 'editar_prov'])->name('proveedor.editar');
    Route::post('proveedor/actualizar/{id_proveedor}', [UserController::class, 'actualizar_prov'])->name('proveedor.actualizar');
    Route::delete('proveedor/eliminar/{id_proveedor}', [UserController::class, 'eliminar_prov'])->name('proveedor.eliminar');
    Route::get('proveedor/crear', [UserController::class, 'crear_prov'])->name('proveedor.crear');
    Route::post('proveedor/guardar', [UserController::class, 'guardar_prov'])->name('proveedor.guardar');
    


    //Cliente
    Route::get('/cliente', [UserController::class, 'inicio_cliente'])->name('cliente.inicio');
    Route::get('cliente/editar/{id}', [UserController::class, 'editar_cliente'])->name('cliente.editar');
    Route::post('cliente/actualizar/{id_cliente}', [UserController::class, 'actualizar_cliente'])->name('cliente.actualizar');
    Route::delete('cliente/eliminar/{id_cliente}', [UserController::class, 'eliminar_cliente'])->name('cliente.eliminar');
    Route::get('cliente/crear', [UserController::class, 'crear_cliente'])->name('cliente.crear');
    Route::post('cliente/guardar', [UserController::class, 'guardar_cliente'])->name('cliente.guardar');
    



});
