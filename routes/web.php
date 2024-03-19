<?php

use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

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

Route::controller(RouteController::class) -> group(function() {
    Route::get('register','register')->name('estudiantes.register');
});


Route::controller(EstudiantesController::class) -> group(function() {
    //Leer la Informacion de los Estudiantes Activos
    Route::get('/', 'readUser')->name('estudiantes.home'); 

    //Creacion de una Nuevo Estudiante
    Route::post('createUser', 'createUser')->name('estudiantes.create_new_user'); 

    //Leer la Informacion del Estudiante en el Formulario de Actualizar
    Route::get('viewUpdateUser/{id}', 'viewUpdateUser')->name('estudiantes.viewUpdateUser');

    //Actualizar la Informacion del Estudiante
    Route::put('updateUser/{id}', 'updateUser')->name('estudiantes.updateUser');

    //Eliminar la a un Estudiante de la Lista
    Route::put('deleteUser/{id}', 'deleteUser')->name('estudiante.deleteUser');

    //Leer la Informacion de los Estudiantes Eliminados
    Route::get('readingDeletedUsers', 'readingDeletedUsers')->name('estudiante.readingDeletedUsers');

    //Restaurar el Estudiante Eliminado a la Lista
    Route::put('restoreDeletedUser/{id}', 'restoreDeletedUser')->name('estudiante.restoreDeletedUser');

    //Busqueda de los Estudiantes por Medio de su ID
    Route::get('readingUserSearch', 'readingUserSearch')->name('estudiante.readingUserSearch');
});

