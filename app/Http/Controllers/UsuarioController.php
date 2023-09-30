<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {

        $usuarios = Usuario::all();

        return view('list', ['usuarios' => $usuarios]);
    }

    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'contrasena' => 'required|string|min:5',
        ]);

        // Crea una nueva instancia del modelo User
        $user = new Usuario();

        // Asigna los valores del formulario al modelo
        $user->nombre = $request->input('nombre');
        $user->apellido = $request->input('apellido');
        $user->email = $request->input('email');
        $user->contrasena = bcrypt($request->input('contrasena'));

        // Guarda el usuario en la base de datos
        $user->save();

        // Puedes redirigir a una página de éxito o hacer cualquier otra cosa que necesites
        return redirect('/list')->with('success', 'Usuario creado exitosamente');
    }
}
