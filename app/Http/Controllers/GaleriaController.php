<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeria;

class GaleriaController extends Controller
{
    public function create()
    {
        return view('galeria.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagen = $request->file('imagen');
        $nombre_imagen = time().'.'.$imagen->extension();
        $imagen->move(public_path('galeria'), $nombre_imagen);

        // Guardar la imagen en la base de datos
        $galeria = new Galeria();
        $galeria->imagen = 'galeria/' . $nombre_imagen;
        $galeria->save();

        return redirect()->route('galeria.create')->with('success', 'Imagen cargada con éxito.');
    }
}