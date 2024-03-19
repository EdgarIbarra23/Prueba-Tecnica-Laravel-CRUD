<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    // Creacion de un Nuevo Estudiante
    public function createUser (Request $request) {

        $request->validate([
            'nombre' => 'required',
            'edad' => 'required',
            'grado' => 'required',
            'email' => 'required'
        ]);

        $estudiante = new Estudiantes();

        $estudiante->nombre = $request->nombre;
        $estudiante->edad = $request->edad;
        $estudiante->grado = $request->grado;
        $estudiante->email = $request->email;

        $estudiante->save();
        
        return redirect()->route('estudiantes.home');
    }


    // Leer la Informacion de los Estudiantes Activos
    public function readUser () {
        $estudiantes = Estudiantes::all();
        // return response()->json($estudiantes);
        return view('home', compact('estudiantes'));
    }
    

    // Leer la Informacion del Estudiante en el Formulario de Actualizar
    public function viewUpdateUser ($id) {
        $estudiante = Estudiantes::find($id);
        return view('Estudiantes/actualizar', compact('estudiante'));
    }


    // Actualizar la Informacion del Estudiante
    public function updateUser(Request $request, $id) {

        $request->validate([
            'nombre' => 'required',
            'edad' => 'required',
            'grado' => 'required',
            'email' => 'required'
        ]);

        $estudiante = Estudiantes::findOrFail($id);
    
        $estudiante->nombre = $request->nombre;
        $estudiante->edad = $request->edad;
        $estudiante->grado = $request->grado;
        $estudiante->email = $request->email;
    
        $estudiante->save();
        return redirect()->route('estudiantes.home');
    }


    //Eliminar a un Estudiante de la Lista
    public function deleteUser($id) {
        $estudiante = Estudiantes::findOrFail($id);
        $estudiante->estado = 'E';
        $estudiante->save();
        return redirect()->route('estudiantes.home');
    }


    //Leer la Informacion de los Estudiantes Eliminados
    public function readingDeletedUsers() {
        $estudiantes = Estudiantes::all();
        return view('Estudiantes/eliminados', compact('estudiantes'));
    }


    //Restaurar el Estudiante Eliminado a la Lista
    public function restoreDeletedUser($id) {
        $estudiante = Estudiantes::findOrFail($id);
        $estudiante->estado = 'A';
        $estudiante->save();
        return redirect()->route('estudiante.readingDeletedUsers');
    }


    //Busqueda de los Estudiantes por Medio de su ID
    public function readingUserSearch(Request $request) {
        $estudianteID = $request->busqueda;
        $estudiante = Estudiantes::find($estudianteID);
        // return $estudiante;
        return view('Estudiantes/busqueda', compact('estudiante'));
    }
}
