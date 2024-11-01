<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class LibroController extends Controller
{
    public function index() {
        return view('principal');
    }

    public function create() {
        return view('registro');
    }

    public function store(Request $request) {
        $messages = [
            'isbn.required' => 'Por favor, ingresa el ISBN de 13 dígitos.',
            'titulo.required' => 'El título es obligatorio.',
            'año.between' => 'El año debe ser un valor entre 1000 y el año actual.',
            // Mas mensajes 
        ];
    
        $validated = $request->validate([
            'isbn' => 'required|digits:13',
            'titulo' => 'required|string|max:150',
            'autor' => 'required|string|max:100',
            'paginas' => 'required|integer|min:1',
            'año' => 'required|integer|between:1000,' . Carbon::now()->year,
            'editorial' => 'required|string|max:100',
            'email_editorial' => 'required|email',
        ], $messages);
    
        return back()->with('success', 'Libro registrado correctamente.');
    }
    
}
