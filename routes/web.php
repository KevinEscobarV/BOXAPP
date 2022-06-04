<?php

use App\Http\Controllers\PagoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Rutas del proyecto

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contactanos', function () {
    return view('contacto');
})->name('contacto');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/galeria', function () {
    return view('galeria');
})->name('galeria');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/horarios', function () {
    return view('horarios');
})->name('horarios');

Route::group(['middleware' => ['role:Administrador|Coach', 'auth:sanctum', config('jetstream.auth_session'),'verified']], function () {
    Route::get('/administrador/usuarios', function(){
        return view('administrador.usuarios');
    })->name('admin.usuarios');

    Route::get('/administrador/roles', function(){
        return view('administrador.roles');
    })->name('admin.roles');

    Route::get('/administrador/rendimientos', function(){
        return view('administrador.rendimientos');
    })->name('admin.rendimientos');
});

Route::get('/planes/precios', [PagoController::class, 'planes'])->name('planes.precios');
Route::get('/{plan}/respuesta', [PagoController::class, 'respuesta'])->name('respuesta');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () { 
    Route::get('/planes/{plan}/pagar', [PagoController::class, 'payment'])->name('planes.payment');
    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');
    Route::get('/usuario/perfil', [UserController::class, 'perfil'])->name('user.perfil');
    Route::get('/usuario/pagos', [UserController::class, 'pagos'])->name('user.pagos');
    Route::get('/usuario/planes', [UserController::class, 'planes'])->name('user.planes');
});
